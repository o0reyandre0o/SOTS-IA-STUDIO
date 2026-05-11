/**
 * SOTS Admin PDF Import Logic
 */
document.addEventListener('DOMContentLoaded', function() {
    const dropZone = document.getElementById('sots-drop-zone');
    const fileInput = document.getElementById('sots-pdf-input');
    const textarea = document.getElementById('sls_raw_data');
    const submitBtn = document.getElementById('submit-import');
    const progressContainer = document.getElementById('sots-import-progress');
    const progressBar = document.getElementById('sots-progress-bar');
    const progressText = document.getElementById('sots-progress-text');

    if (!dropZone || !fileInput) return;

    // Configurar Worker de PDF.js
    pdfjsLib.GlobalWorkerOptions.workerSrc = sls_admin_data.worker_url;

    // Abrir selector de archivos al hacer click en la zona
    dropZone.addEventListener('click', () => fileInput.click());

    // Estilos al arrastrar
    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('dragover');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('dragover');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('dragover');
        const files = e.dataTransfer.files;
        if (files.length) handleFiles(files);
    });

    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length) handleFiles(e.target.files);
    });

    async function handleFiles(filesArray) {
        progressContainer.style.display = 'block';
        textarea.value = '';
        submitBtn.disabled = true;

        let fullText = '';

        for (let j = 0; j < filesArray.length; j++) {
            const file = filesArray[j];
            if (file.type !== 'application/pdf') {
                console.warn('Saltando archivo no PDF:', file.name);
                continue;
            }

            progressText.innerText = `Cargando ${file.name}...`;

            try {
                const arrayBuffer = await file.arrayBuffer();
                const typedarray = new Uint8Array(arrayBuffer);
                const pdf = await pdfjsLib.getDocument(typedarray).promise;
                const totalPages = pdf.numPages;

                for (let i = 1; i <= totalPages; i++) {
                    // Actualizar progreso
                    const percent = Math.round((i / totalPages) * 100);
                    progressBar.style.width = percent + '%';
                    progressText.innerText = `Archivo ${j+1}/${filesArray.length} (${file.name}) - Leyendo página ${i} de ${totalPages}...`;

                    const page = await pdf.getPage(i);
                    const textContent = await page.getTextContent();
                    
                    // Unir los fragmentos de texto de la página
                    const pageText = textContent.items.map(item => item.str).join(' ');
                    
                    // Asegurarnos de que el modo Tbl Number se detecte si es necesario
                    if (j > 0 && i === 1) {
                         fullText += '\n\n---NEW_FILE---\n\n'; 
                    }
                    fullText += pageText + '\n';
                }
            } catch (error) {
                console.error('Error al procesar PDF:', file.name, error);
            }
        }

        if (fullText.trim() === '') {
            alert('No se pudo extraer texto de los archivos. Asegúrate de que sean PDFs válidos y no estén protegidos.');
            progressContainer.style.display = 'none';
            return;
        }

        // Borrar el encabezado visualmente para que el usuario no lo vea en el textarea
        const headersRegex = /(?:Name\s*Description\s*Licence\s*Type\s*(?:Tbl\s*Number\s*)?File\s*Number\s*Start\s*Date\s*End\s*Date\s*Location|Tbl Number|File Number|Start Date|End Date)/gi;
        fullText = fullText.replace(headersRegex, ' ');

        textarea.value = fullText;
        submitBtn.disabled = false;
        progressText.innerText = `¡${filesArray.length} PDF(s) procesados con éxito! Haz clic en "Confirmar e Importar" abajo.`;
    }
});

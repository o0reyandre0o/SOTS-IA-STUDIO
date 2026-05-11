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
        if (files.length) handleFile(files[0]);
    });

    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length) handleFile(e.target.files[0]);
    });

    async function handleFile(file) {
        if (file.type !== 'application/pdf') {
            alert('Por favor, selecciona un archivo PDF válido.');
            return;
        }

        progressContainer.style.display = 'block';
        textarea.value = '';
        submitBtn.disabled = true;

        const reader = new FileReader();
        reader.onload = async function() {
            const typedarray = new Uint8Array(this.result);
            
            try {
                const pdf = await pdfjsLib.getDocument(typedarray).promise;
                let fullText = '';
                const totalPages = pdf.numPages;

                for (let i = 1; i <= totalPages; i++) {
                    // Actualizar progreso
                    const percent = Math.round((i / totalPages) * 100);
                    progressBar.style.width = percent + '%';
                    progressText.innerText = `Leyendo página ${i} de ${totalPages}...`;

                    const page = await pdf.getPage(i);
                    const textContent = await page.getTextContent();
                    
                    // Unir los fragmentos de texto de la página
                    const pageText = textContent.items.map(item => item.str).join(' ');
                    fullText += pageText + '\n';
                }

                textarea.value = fullText;
                submitBtn.disabled = false;
                progressText.innerText = '¡PDF procesado con éxito! Haz clic en "Confirmar e Importar" abajo.';
                
            } catch (error) {
                console.error('Error al procesar PDF:', error);
                alert('Hubo un error al leer el PDF. Asegúrate de que no esté protegido con contraseña.');
                progressContainer.style.display = 'none';
            }
        };
        reader.readAsArrayBuffer(file);
    }
});

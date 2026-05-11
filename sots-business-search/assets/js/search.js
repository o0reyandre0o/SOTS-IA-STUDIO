/**
 * SOTS Business License Search - Frontend Logic
 */
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('sots-license-search-input');
    const resultsContainer = document.getElementById('sots-search-results');
    
    if (!searchInput || !resultsContainer) return;

    let debounceTimer;

    searchInput.addEventListener('input', function() {
        const query = this.value.trim();
        
        clearTimeout(debounceTimer);
        
        if (query.length < 2) {
            resultsContainer.innerHTML = '';
            resultsContainer.classList.remove('active');
            return;
        }

        debounceTimer = setTimeout(() => {
            fetchSearchResults(query);
        }, 300);
    });

    async function fetchSearchResults(query) {
        try {
            const response = await fetch(`${sls_data.root}sots/v1/search?q=${encodeURIComponent(query)}`, {
                headers: {
                    'X-WP-Nonce': sls_data.nonce
                }
            });
            
            if (!response.ok) throw new Error('Error en la búsqueda');
            
            const results = await response.json();
            displayResults(results);
        } catch (error) {
            console.error('Error:', error);
        }
    }

    function displayResults(results) {
        resultsContainer.innerHTML = '';
        resultsContainer.classList.add('active');

        if (results.length === 0) {
            resultsContainer.innerHTML = '<div class="sots-no-results">No se encontraron licencias con ese término.</div>';
            return;
        }

        results.forEach(item => {
            const resultItem = document.createElement('div');
            resultItem.className = 'sots-result-item';
            
            const tblNumHtml = item.tbl_number ? `<div class="sots-result-meta"><span class="sots-meta-label">TBL Number:</span><span class="sots-meta-value">${item.tbl_number}</span></div>` : '';

            resultItem.innerHTML = `
                <div class="sots-result-header">
                    <span class="sots-result-name">${item.name}</span>
                    <span class="sots-result-id">${item.file_number}</span>
                </div>
                <div class="sots-result-desc">${item.description}</div>
                <div class="sots-result-meta">
                    <div><span class="sots-meta-label">Desde:</span><span class="sots-meta-value">${item.start_date}</span></div>
                    <div><span class="sots-meta-label">Vence:</span><span class="sots-meta-value">${item.end_date}</span></div>
                    ${tblNumHtml}
                    <div class="sots-result-location">
                        <span class="sots-meta-label">Ubicación:</span>
                        <span class="sots-meta-value">${item.location}</span>
                    </div>
                </div>
            `;
            
            resultsContainer.appendChild(resultItem);
        });
    }

    // Cerrar dropdown al hacer click fuera
    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target) && !resultsContainer.contains(e.target)) {
            resultsContainer.classList.remove('active');
        }
    });

    // Abrir dropdown si hay texto al hacer click en el input
    searchInput.addEventListener('focus', function() {
        if (this.value.trim().length >= 2 && resultsContainer.children.length > 0) {
            resultsContainer.classList.add('active');
        }
    });
});

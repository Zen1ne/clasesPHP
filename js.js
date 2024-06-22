function cambiarEstilo() {
    var label = document.getElementById("miLabel");
    
    // Configurar un observador de mutaciones para el label
    var observer = new MutationObserver(function(mutationsList) {
        for (var mutation of mutationsList) {
            if (mutation.type === 'childList' || mutation.type === 'characterData') {
                if (label.innerText.trim() === "23") {
                    label.classList.remove("input-border");
                    label.classList.add("error-border");
                } else {
                    label.classList.remove("error-border");
                    label.classList.add("input-border");
                }
            }
        }
    });
    
    // Observar cambios en el contenido del label
    observer.observe(label, { characterData: true, subtree: true });
}

// Llamar a la función al cargar el DOM
document.addEventListener("DOMContentLoaded", function() {
    cambiarEstilo();
});
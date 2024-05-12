var modals = document.querySelectorAll(".modal");
        var btns = document.querySelectorAll(".view-details");
        var spans = document.querySelectorAll(".close");

        btns.forEach(function(btn) {
            btn.addEventListener("click", function() {
                var modalId = btn.dataset.modalId;
                var modal = document.getElementById(modalId);
                modal.style.display = "block";
            });
        });

        spans.forEach(function(span) {
            span.addEventListener("click", function() {
                var modal = span.parentElement.parentElement;
                modal.style.display = "none";
            });
        });

        window.addEventListener("click", function(event) {
            modals.forEach(function(modal) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            });
        });
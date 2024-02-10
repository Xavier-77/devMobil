<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface de Gestion</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="interface">
		<div class="ligne">
		<?php include 'header1.php'; ?>
		</div>
		
		<div class="ligne">
            <?php include 'header2.php'; ?>
        </div>
        <div class="ligne">
            <?php include 'header3.php'; ?>
        </div>
        <div><?php include 'tabl.php'; ?></div>
    </div>
	<script>
        function toggleProfileMenu() {
            var menu = document.getElementById("profileMenu");
            menu.classList.toggle("active");
        }
		function toggleEntrepriseMenu() {
            var menu = document.getElementById("entrepriseMenu");
            menu.classList.toggle("active");
        }

        function logout() {
            // Code pour se déconnecter de l'application
        }

        // Exemple de fonction pour ajuster la hauteur du remplissage du cercle en fonction du pourcentage
        function setCircleFill(circleId, percentage) {
            var circle = document.getElementById(circleId);
            var fill = circle.querySelector(".fill");
            fill.style.height = percentage + "%";
        }

        // Exemple de mise à jour de la hauteur de remplissage du cercle en fonction du nombre de présents
        var nombrePresent = 20; // Valeur à modifier dynamiquement
        var totalPersonnes = 100; // Valeur totale
        var pourcentagePresent = (nombrePresent / totalPersonnes) * 100;
        setCircleFill("presentsCircle", pourcentagePresent);
		        // Exemple de mise à jour de la couleur du texte en fonction du nombre de présents
        function updateTextColors() {
            var retardsCount = document.getElementById("retardsCount");
            var presentsCount = document.getElementById("presentsCount");
            var absentsCount = document.getElementById("absentsCount");

            // Exemple: changer la couleur du texte en fonction du nombre de présents
            var nombrePresent = 50; // Récupérer cette valeur dynamiquement
            if (nombrePresent < 20) {
                presentsCount.style.color = "red";
            } else if (nombrePresent < 50) {
                presentsCount.style.color = "orange";
            } else {
                presentsCount.style.color = "green";
            }
        }

        // Appel de la fonction pour mettre à jour la couleur du texte au chargement de la page
        updateTextColors();
    </script>
</body>
</html>

<?php
// Tableau de pensées existentielles, poétiques ou absurdes
$thoughts = [
    "La logique vous mènera d’un point A à un point B. L’imagination vous mènera partout. — Einstein",
    "L’univers ne te doit rien. Il était là bien avant toi.",
    "Ce n’est pas le vent qui décide de ta direction, mais l’orientation de ta voile.",
    "Si l’on mettait l’éternité en bouteille, l’étiquette serait sûrement vide.",
    "Je pense, donc je suis... mais parfois, je préfère ne pas penser pour mieux être."
];

// Choisir une pensée au hasard
$dailyThought = $thoughts[array_rand($thoughts)];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Pensée du Jour</title>
    <style>
        body {
            background-color: #fef8f0;
            font-family: 'Georgia', serif;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #aa4b6b;
        }
        p {
            font-size: 1.5em;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>🌸 Pensée du Jour 🌸</h1>
    <p><?php echo $dailyThought; ?></p>
</body>
</html>

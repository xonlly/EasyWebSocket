EasyWebSocket
=============

EasyWebSocket est une class en php qui permet de géré les websockets d'un client JS avec PHP.

Un système de gestion d'utilisateurs y et intégré pour faire passé simplement l'id / token d'un utilisateur.
Son Token/ID sera disponible tout le temps de la session du socket, Il et possible de définir plusieurs fois le meme token
si par exemple l'utilisateur a ouvert plusieurs onglets.

<h2>Run</h2>
Le serveur PHP doit etre lancé sur le serveur avec:<br />
<code>
php -q server_exemple.php
</code>

<b>Attention</b>, ne pas oublier:<br />
<code>
new ExempleClass("0.0.0.0", 12346);
</code>

0.0.0.0: Autorise toutes les IP

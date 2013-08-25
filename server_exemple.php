#!/php -q
<?php  /* run as > php -q server_exemple.php  */
/**
 * On fait une class avec la quelle on va géré nos sockets.
 * 
 * On extends la class EasySocket.
 * 
 * $this->say("msg") pour avoir des logs coté serveur.
 * $this->sending("msg") pour envoyer a l'utilisateur du token
 * 
 * Au moment du login le serveur renvoi automatiquement si le login et valide ou non avec la phrase ""
 * Si aucun login et effectué le serveur renvéra automatiquement "please login" et n'executera pas la function result.
 * 
 * 
 */
class ExempleClass extends EasySocket {
    /**
     * Cette class et automatique executé au moment de la resseption d'un socket.send() via le javascript.
     * 
     * @param string $token ( Token définit au moment du login avec le JS )
     * @param string $message ( Message envoyer dans le socket.send("ICI") )
     */
    public function result($token, $message) {
        //$this->say("[Token:" . $token . "] [msg:" . $message . "]");
        $this->sending("coucou"); // Envoi "coucou" au client JS.
    }
}

// IP / PORT d'écoute.
new ExempleClass("0.0.0.0", 12346);
?>

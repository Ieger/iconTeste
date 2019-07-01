<!--
Desenvolvido por Erik Ieger Dobrychtop
-->
<?php

/**
 * Class Twitter
 * @package app\models
 *
 * Classe para manipular a API do Twitter.
 */
class Twitter
{

    /**
     * Consumer Key.
     */
    const consumer_key = "";

    /**
     * Consumer Secret.
     */
    const consumer_secret = "";

    /**
     * Access Token.
     */
    const access_token = "";

    /**
     * Access Token Secret.
     */
    const access_token_secret = "";

    /**
     * Connection
     */
        protected $connection;

    /**
     * @return string
     */
    public function getConsumerKey()
    {
        return (string)$this->consumer_key;
    }

    /**
     * @param $consumer_key
     * @return bool
     */
    private function setConsumerKey($consumer_key)
    {
        return (boolean)$this->consumer_key = $consumer_key;
    }

    /**
     * @return string
     */
    public function getConsumerSecret()
    {
        return (string)$this->consumer_secret;
    }

    /**
     * @param $consumer_secret
     * @return bool
     */
    private function setConsumerSecret($consumer_secret)
    {
        return (boolean)$this->consumer_secret = $consumer_secret;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return (string)$this->access_token;
    }

    /**
     * @param $access_token
     * @return bool
     */
    private function setAccessToken($access_token)
    {
        return (boolean)$this->access_token = $access_token;
    }

    /**
     * @return string
     */
    public function getAccessTokenSecret()
    {
        return (string)$this->access_token_secret;
    }

    /**
     * @param $access_token_secret
     * @return bool
     */
    private function setAccessTokenSecret($access_token_secret)
    {
        return (boolean)$this->access_token_secret = $access_token_secret;
    }

    /**
     * @return string
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param $sconsumer_key
     * @param $sconsumer_secret
     * @param $access_token
     * @param $access_token_secret
     * @return bool
     */
    private function setConnection($sconsumer_key, $sconsumer_secret, $access_token, $access_token_secret)
    {
        return $this->connection = new \Abraham\TwitterOAuth\TwitterOAuth($sconsumer_key, $sconsumer_secret, $access_token, $access_token_secret);
    }

    /**
     * Twitter constructor.
     */
    public function __construct()
    {
        $this->setConsumerKey('f3anbiYmyFuAMMemPJY2p1ZAk');
        $this->setConsumerSecret('lJrjYxewk8EMCzWVd0xZth4FavzHXVZiNQkpTsHTfZp6dWwv1N');
        $this->setAccessToken('1144680225638363136-AhARncgMcxIrAlBW6i4Stc5xd1gKo4');
        $this->setAccessTokenSecret('ZvjXyKFrVYhnFTeuIzjBhpaG1O1WFOnyF3XdatlBVsM5X');

        if (empty($this->getConsumerKey()) || empty($this->getConsumerSecret()) || empty($this->getAccessToken()) || empty($this->getAccessTokenSecret())) {
            throw new Exception("Erro: Configuração incorreta ou não preenchida para a instancia");
        }else{
            $this->setConnection($this->getConsumerKey(), $this->getConsumerSecret(), $this->getAccessToken(), $this->getAccessTokenSecret());
        }
    }
}

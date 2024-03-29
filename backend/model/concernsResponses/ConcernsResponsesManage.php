<?php

    declare(strict_types = 1);

    namespace App\Model\ConcernsResponses;

    use App\Model\Database\DbManage;

    class ConcernsResponsesManage extends DbManage
    {
        /**
         * function which get the language used
         * in the concern
         */
        public function getLanguage(string $idConcern)
        {
            $db = $this->dbConnect();
            $queryGetLanguage = $db->prepare('SELECT f_language FROM dev_concerns WHERE id = ?');
            $queryGetLanguage->execute(array($idConcern));

            return $queryGetLanguage->fetch();
        }


        /**
         *function which set in new
         *response for a concern
         */
        public function setConcernResponse(string $idConcern, string $language, string $author, string $response): bool
        {
            $db = $this->dbConnect();
            $querySetNewResponse = $db->prepare('INSERT INTO concerns_responses(idConcern, theme_concern, f_author, f_response, response_date) VALUES(?, ?, ?, ?, NOW())');

            return $querySetNewResponse->execute(array($idConcern, $language, $author, $response));
        }

        /**
         * function which get all comments for
         * a concern based on his id
         */
        public function getConcernResponses(string $idConcern): array
        {
            $db = $this->dbConnect();
            $queryGetConcernCom = $db->prepare('SELECT *, DATE_FORMAT(response_date, "%d/%m/%Y à %Hh:%imin:%ss") as date_response_fr FROM concerns_responses WHERE idConcern = ? ORDER BY response_date DESC');
            $queryGetConcernCom->execute(array($idConcern));

            return $queryGetConcernCom->fetchAll();
        }

        /**
         * function which  get all concerns responses
         * and used it in tablesCounter ctrl for
         * count concerns responses
         */
        public function getAllConcernResponses(): array
        {
            $db = $this->dbConnect();
            $queryGetAllConcernResponses = $db->prepare('SELECT * FROM concerns_responses');
            $queryGetAllConcernResponses->execute();

            return $queryGetAllConcernResponses->fetchAll();
        }
    }
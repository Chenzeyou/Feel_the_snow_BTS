<?php
    use JeroenDesloovere\VCard\VCard;
    
    class VcardExport
    {
    
        public function contactVcardExportService($contactResult)
        {
            require_once 'vendor/behat/transliterator/src/Behat/Transliterator/Transliterator.php';
            require_once 'vendor/jeroendesloovere/vcard/src/VCard.php';
            
            // define vcard
            $vcardObj = new VCard();
    
            // add personal data
            $vcardObj->addName($contactResult[0]["Nom"] . " " . $contactResult[0]["Prénom"]);

            
            $vcardObj->addCompany($contactResult[0]["Entreprise"]);
            $vcardObj->addJobtitle($contactResult[0]["Poste"]);
            //$vcardObj->addRole('Data Protection Officer');
            $vcardObj->addEmail($contactResult[0]["E-mail"]);
            //$vcardObj->addEmail($contactResult[0]["email_1"]);

            $vcardObj->addPhoneNumber($contactResult[0]["NumPortable"], 'PREF;WORK');
            $vcardObj->addPhoneNumber($contactResult[0]["NumFix"], 'WORK');
            //$vcardObj->addPhoneNumber($contactResult[0]["num_2"], 'WORK');

            $vcardObj->addAddress($contactResult[0]["Adresse"]);
            //$vcardObj->addAddress($contactResult[0]["adresse_2"]);

            //$vcardObj->addLabel('street, worktown, workpostcode Belgium');
           // $vcardObj->addURL($contactResult[0]["website"]);
           //             $vcardObj->addURL($contactResult[0]["linkedin"]);
          //              $vcardObj->addURL($contactResult[0]["instagram"]);
          //              $vcardObj->addURL($contactResult[0]["facebook"]);
          //              $vcardObj->addURL($contactResult[0]["twitter"]);

           // $vcardObj->addNote($contactResult[0]["note"]);
          //  $vcardObj->addPhotoContent($contactResult[0]["image"]);

            
            
            
            
            
            
            
            
            
            

            return $vcardObj->download();

        }
    }

?>
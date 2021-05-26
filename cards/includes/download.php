
<!DOCTYPE html> 

<html> 

  

<body> 

    <style> 

        p { 

            color: green; 

        } 

    </style> 

  

    <p>How to trigger a file download when clicking an HTML button or JavaScript? 

        <p> 

  

            <textarea id="text">
                                                <?php echo "BEGIN:VCARD
                                                    VERSION:2.1
                                                    N:Bendjeddou;Zahir;Ibn Nadjib;It Devloper;Ceo
                                                    FN:It Devloper Zahir Ibn Nadjib Bendjeddou, Ceo
                                                    TEL;CELL:0652357907
                                                    EMAIL;HOME:zahir.bendjeddou@outlook.fr
                                                    ADR;HOME:;;59 Boulvard Pinel;Venissieux ;Rhone;69200;France
                                                    ORG:Deimclan
                                                    TITLE;CHARSET=UTF-8;ENCODING=QUOTED-PRINTABLE:=44=C3=A9=76=65=6C=6F=70=70=65=75=72
                                                    URL:google.fr
                                                    NOTE:Blablabla
                                                    BDAY:1998-06-28
                                                    X-ANDROID-CUSTOM:vnd.android.cursor.item/relation;Celibataire;9;;;;;;;;;;;;;
                                                    END:VCARD";
                                                ?>
            </textarea> 

            <br/> 

            <input type="button" id="btn" value="Download" /> 

  

            <script> 

                function download(file, text) { 

  

                    //creating an invisible element 

                    var element = document.createElement('a'); 

                    element.setAttribute('href', 'data:text/plain;charset=utf-8, ' 

                                         + encodeURIComponent(text)); 

                    element.setAttribute('download', file); 

  

                    //the above code is equivalent to 

                    // <a href="path of file" download="file name"> 

  

                    document.body.appendChild(element); 

  

                    //onClick property 

                    element.click(); 

  

                    document.body.removeChild(element); 

                } 

  

                // Start file download. 

                document.getElementById("btn").addEventListener("click", function() { 

                    // Generate download of hello.txt file with some content 

                    var text = document.getElementById("text").value; 

                    var filename = "contact.vcf"; 

  

                    download(filename, text); 

                }, false); 

            </script> 

  

</body> 

  

</html> 
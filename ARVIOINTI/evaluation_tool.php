


<!DOCTYPE html>

<html>
    <head>
      <title>Testi2</title>
      <meta charset="UTF-8">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   </head>

   <body>
         <?php

          $studentid = $_POST['"$student"'];
   
          echo $studentid;
          ?>
      
      <header>
        <img src="jamk-logo.png" alt="Jamk logo">
      </header>
      
      <nav>
        <ul>
           
        </ul>
      </nav>
      
      <main>
          
          
     <section>
          <h1 style="text-align:center;">ARVIOINTI</h1>
       
      <article>

         <h1 style="text-align:center;">1. Aiheen ja lähestymistavan valinta</h1>  
          
            <div class="container">
            <div class="two">
            <button type="button" id="triangle-up" data-toggle="collapse" data-target="#demo1"></button>
                </div>
            <div id="demo1" class="collapse"><br>
          
          
          <form action="">1.1 Aiheen vaativuus
                          
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5 
            <span style="width:500px;">Aihe on haastava ja tuo uutta alalle.</span>
            </span>
            
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Aihe on melko haastava ja tuo uutta toimeksiantajalle.</span>
            </span>  
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Aihe on tavanomainen, mutta sisältää uusia näkökulmia.</span>
            </span>  
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Aihe on alalle melko tavanomainen eikä sisällä uusia näkökulmia.</span>
            </span>  
            
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Aihe on rutiininomainen, mutta tukee opiskelijan opintoja ja ammatillista kehittymistä.</span>
            </span>  
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Aiheen valinta ei noudata JAMK:n opinnäytetyöprosessia.</span>
            </span>    
              
          </form><br>
      
  
          <form action="">1.2 Opinnäytetyön ongelman/tavoitteiden määritys ja täsmennys
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Opinnäytetyön ongelma ja opinnäytetyön rajaus on fokusoitu hyvin. Tavoitteet ovat selvät ja ne on asetettu oikein ongelman/kehittämistehtävän kannalta.</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Opinnäytetyön ongelma ja tavoitteet on rajattu ja määritelty selkeästi.</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Opinnäytetyön ongelma ja tavoitteet on rajattu ja määritelty melko selkeästi.</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Opinnäytetyön ongelma ja tavoitteet ovat suuntaa-antavia. Ne on määritelty osittain tutkimus-/kehittämistehtävän mukaisesti.</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Opinnäytetyön ongelmaa ja tavoitteita on pyritty määrittelemään, mutta ne jäävät epäselväksi.</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Opinnäytetyön ongelma ja tavoitteet ovat määrittelemättä.</span>
            </span>
          </form><br>  
              

          <form action="">1.3 Kehittämis-/tutkimusote ja sen osuvuus
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Kehittämis-/tutkimusote on kuvattu perusteellisesti. Se soveltuu ilmiöön ja perustelut onesitetty. Ote on haastava.</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Kehittämis-/tutkimusote on kuvattu ja perusteltu. Se soveltuu ilmiöön.</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Kehittämis-/tutkimusote on kuvattu ja perustelut valinnalle on esitetty.</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Kehittämis-/tutkimusote on kuvattu, mutta sitä ei ole perusteltu.</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Kehittämis-/tutkimusote on kuvattu, mutta se ei sovellu ilmiöön.</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Kehittämis-/tutkimusote puuttuu.</span>
            </span>
            </form><br>
      
              </div>
          </div>
          
          <h1 style="text-align:center;">2. Tietoperusta ja työn rakenne</h1>
          
            <div class="container">
            <div class="two">
            <button type="button" id="triangle-up" data-toggle="collapse" data-target="#demo2"></button>
                </div>
            <div id="demo2" class="collapse"><br>          
          
          <form action="">2.1 Tietoperustan/teorian, viitekehyksenosuvuus ja riittävyys
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Tietoperusta on laaja ja liittyy aihealueeseen. Merkittävä osa on vieraskielistä. Lähdeaineisto on ilmiön kannalta uutta ja relevanttia. Lähdekriittisyyttä on noudatettu.</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Tietoperusta on laaja ja liittyy aihealueeseen. Osa on vieraskielistä. Lähdeaineisto on ilmiön kannalta uutta ja relevanttia. Lähdekriittisyyttä on noudatettu.</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Tietoperusta on laajahko, aihealueeseen liittyvä, ei oppikirjapohjainen. Mukana on vieraskielistä kirjallisuutta. Tietoperusta on ilmiön kannalta pääosin relevanttia. Lähdekriittisyyttä on noudatettu.</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Tietoperustaon suppeahko, oppikirjapohjainen, tukee kehittämis-/tutkimusaihetta ja liittyy ilmiöön.</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Tietoperustaon suppea, oppikirjapohjainen ja sivuaa kehittämis-/tutkimusaihetta. Lähdeaineisto on osin vanhentunutta.</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Tietoperusta puuttuu.</span>
            </span>
            </form><br>  
          
          <form action="">2.2 Keskeisten käsitteiden määrittely
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Keskeiset käsitteet on kuvattu hyödyntäen aikaisempia tutkimuksia,ja niitä on tarkasteltu kriittisesti.</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Keskeiset käsitteet on määritelty selkeästi ja johdonmukaisesti aikaisempia tutkimuksia hyödyntäen.</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Keskeiset käsitteet on määritelty selkeästi,ja ne kytkeytyvät ratkaistavaan ongelmaan/käsiteltävään ilmiöön.</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Keskeiset käsitteet on määritelty suppeasti ratkaistavan ongelman/käsiteltävän ilmiön näkökulmasta.</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Keskeisiä käsitteitä on yritetty määritellä, mutta ne vain sivuavat ratkaistavaa ongelmaa/käsiteltävää ilmiötä.</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Keskeiset käsitteet ovat määrittelemättä.</span>
            </span>
            </form><br>    
          
          <form action="">2.3 Kehittämis-/tutkimustyönaineiston keruumenetelmien kuvaus ja osuvuus
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Kehittämis-/tutkimustyön aineiston keruumenetelmät ovat monipuoliset. Ne on kuvattu ja perusteltu hyvin työn kannalta.</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Kehittämis-/tutkimustyön aineistonkeruumenetelmät on kuvattu ja perusteltu hyvin opinnäytetyön kannalta.</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Kehittämis-/tutkimustyön aineiston keruumenetelmät on kuvattu ja perusteltu. Perustelut ovat riittävät opinnäytetyön kannalta.</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Kehittämis-/tutkimustyön aineiston keruumenetelmät on kuvattu ja valinnat on perusteltu opinnäytetyön kannalta suppeasti.</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Kehittämis-/tutkimustyön aineiston keruumenetelmiä on kuvattu suppeastija valintaa ei ole perusteltu.</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Kehittämis-/tutkimustyön aineiston keruumenetelmiä ei ole kuvattu.</span>
            </span>
            </form><br>  
          
          <form action="">2.4 Kehittämis-/tutkimustyön aineiston analyysimenetelmien kuvaus ja osuvuus
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Analyysimenetelmien kuvaus on monipuolista ja huolellista. Valitut analyysimenetelmät ovat vaativia.	</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Analyysimenetelmien kuvaus on osuvaa ja perusteltua. Menetelmät ovat perustasoa vaativampia.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Analyysimenetelmät on kuvattu ja perusteltu opinnäytetyön kannalta riittävästi. Menetelmät ovat tavanomaisia.	</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Analyysimenetelmät on kuvattu ja perusteltu. Valitut analyysimenetelmät ovat yksinkertaisia ja soveltuvat kerätyn aineiston analyysiin.	</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Analyysimenetelmät on kuvattu suppeasti. Valitut analyysimenetelmät eivät sovellu kerätyn aineiston analyysiin.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Analyysimenetelmiä ei ole kuvattu.	</span>
            </span>
            </form><br>  
                
              </div>
          </div>                
          
          <h1 style="text-align:center;">3. Opinnäytetyön toteutus</h1>
          
            <div class="container">
            <div class="two">
            <button type="button" id="triangle-up" data-toggle="collapse" data-target="#demo3"></button>
                </div>
            <div id="demo3" class="collapse"><br>                
                
          <form action="">3.1 Opinnäytetyön prosessin/projektin hallinta (itsenäisyys, aikataulutus)
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Opiskelija toteuttaa opinnäytetyön itseohjautuvasti ja tuloksellisesti ja pystyy tuomaan esille omatoimisesti uusia ratkaisuja/menetelmiä.	</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Opiskelija toteuttaa opinnäytetyön itsenäisesti sovitun aikataulun ja laaditun suunnitelman mukaisesti.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Opiskelija toteuttaa opinnäytetyön itsenäisesti sovitun aikataulun ja laaditun suunnitelman mukaisesti.	</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Opiskelija tarvitsee keskimääräistä enemmän ohjausta useissa perusasioissa.	</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Opiskelija tarvitsee keskimääräistä enemmän ohjausta useissa perusasioissa.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Opiskelija ei kykene tuottamaanitsenäisesti opinnäytetyötä.	</span>
            </span>
            </form><br>      
          
          <form action="">3.2 Kehittämis-/tutkimustyön aineistokeruun toteutus
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Kerätty aineisto on laaja, sitä on tarkasteltu kriittisesti ja se antaa luotettavan tuloksen tavoitteiden kannalta.	</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Kerättyaineisto on laaja ja siitä voidaan tehdä perusteltuja johtopäätöksiä tavoitteiden kannalta.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Kerätty aineisto on riittävä ja luotettava tavoitteiden kannalta.	</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Kerätty aineisto on suppea, luotettavuus on melko heikko tavoitteiden kannalta.	</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Kerätty aineisto on riittämätön, luotettavuus on heikko tavoitteiden kannalta.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Opiskelija ei kykene keräämään luotettavaa aineistoa.	</span>
            </span>
            </form><br>  
          
          <form action="">3.3 Aineistonanalyysi-menetelmien käyttö
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Aineiston analyysimenetelmien käyttö on perustasoa parempi, menetelmiä on käytetty hyvin ja taitavasti.	</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Aineiston analyysimenetelmienkäyttö on perustasoa parempi, menetelmiä on käytetty hyvin.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Aineiston analyysimenetelmien käyttö on tavanomaista perustasoa.	</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Aineiston analyysimenetelmien käyttö on yksinkertaista ja pinnallista.	</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Aineiston analyysimenetelmien käyttö on yksinkertaista ja pinnallista.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Aineiston analyysimenetelmien käyttö on puutteellista.	</span>
            </span>
            </form><br>   
                
              </div>
          </div>                
                              
        <h1 style="text-align:center;">4. Tulokset/tuotokset ja niiden analysointi</h1> 
                
            <div class="container">
            <div class="two">
            <button type="button" id="triangle-up" data-toggle="collapse" data-target="#demo4"></button>
                </div>
            <div id="demo4" class="collapse"><br>                
          
          <form action="">4.1 Opinnäytetyön tavoitteiden saavuttaminen/ongelman ratkaisu
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Opinnäytetyölle asetetut tavoitteet saavutetaan erittäin hyvin. Toimeksiantajan palaute on kiittävää.	</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Opinnäytetyölle asetetut tavoitteet saavutetaan. Toimeksiantaja on pääsääntöisesti tyytyväinen työn tuloksiin.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Opinnäytetyölle asetetut tavoitteet saavutetaan. Toimeksiantaja on pääsääntöisesti tyytyväinen työn tuloksiin.	</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Opinnäytetyölle asetetut tavoitteet saavutetaan osittain. Toimeksiantajan palaute osoittaa puutteita työssä.	</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Opinnäytetyölle asetetut tavoitteet saavutetaan osittain. Toimeksiantajan palaute osoittaa puutteita työssä.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Opinnäytetyölle asettuja tavoitteita ei saavuteta.	</span>
            </span>
            </form><br>    
          
          <form action="">4.2 Tulosten/tuotosten ja johtopäätösten esittäminen	
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Tulokset/tuotokseton esitetty kriittisesti, johtopäätösten perusteella esitetyt toteuttamiskelpoiset kehittämisideat ovat toimeksiantajan hyödynnettävissä.	</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Tulokset/tuotokset on esitetty havainnollisesti ja johtopäätöstenperusteella esitetään kehittämisideoita.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Tulokset/tuotokset on esitetty monipuolisesti, johtopäätösten perusteella pyritään esittämään kehittämisideoita.	</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Tulokset/tuotokset on esitetty ja johtopäätökset ovat suuntaa-antavia.	</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Tulokset/tuotokset on esitetty ja johtopäätökset on tehty, mutta ne ovat puutteellisia.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Tulokset/tuotokset ja johtopäätökset puuttuvat.	</span>
            </span>
            </form><br>    
          
          <form action="">4.3 Opinnäytetyönlaadun varmennus ja luotettavuus		
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Luotettavuuden / laadunarviointi on perusteellinen ja tarkastelu on reflektiivistä ja kriittistä.	</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Luotettavuuden / laadunarviointi on perusteellinen.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Luotettavuuden / laadunarviointi on tehty muodollisesti oikein.	</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Luotettavuuden / laadunarviointi on tehty osittain / pinnallisesti.	</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Luotettavuuden / laadunarviointi on puutteellinen.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Luotettavuuden / laadunarviointi puuttuu kokonaan.	</span>
            </span>
            </form><br>  
                
              </div>
          </div>                
          
          <h1 style="text-align:center;">5. Raportointi</h1>
                
            <div class="container">
            <div class="two">
            <button type="button" id="triangle-up" data-toggle="collapse" data-target="#demo5"></button>
                </div>
            <div id="demo5" class="collapse"><br>                
          
          <form action="">5.1 Raportoinnin tarkkuus ja havainnollisuus			
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Raportointi on vakuuttavaa, vaikuttavaa ja tuo hankitun osaamisen hyvin esille.	</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Raportointi on tehty analyyttisesti ja havainnollisesti.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Raportointi on tehty johdonmukaisesti, perustellusti ja havainnollisesti. Siinä on vähäisiä puutteita.	</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Raportointi on johdonmukaista ja havainnollista, mutta siinä onjoitakin epäloogisuuksia ja puutteita.	</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Raportointi on johdonmukaista ja havainnollista, mutta siinä onjoitakin epäloogisuuksia ja puutteita.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Opiskelija ei pysty raportoimaan opinnäytetyötään johdonmukaisesti ja havainnollisesti. Työssä on havaintoja plagioinnista.	</span>
            </span>
            </form><br>    
          
          <form action="">5.2 Opinnäytetyön kieli ja asiatyyli			
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Opiskelijan teksti on sujuvaa ja (lähes) virheetöntä. Ei vaadi ohjausta.	</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Opiskelijan teksti on sujuvaa ja lähes virheetöntä. Ei juuri vaadi ohjausta.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Opiskelijan teksti on jäsentynyttä ja siinä on satunnaisia kieli- ja tyylivirheitä. Vaatii jonkin verran ohjausta.	</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Opiskelijan teksti on osittain jäsentymätöntä ja siinä on toistuvia kieli- ja tyylivirheitä. Vaatii melko paljon ohjausta.	</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Opiskelijan teksti on jäsentymätöntä ja siinä on paljon erilaisia kieli- ja tyylivirheitä. Vaatii paljon ohjausta.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Opiskelija ei pysty itsenäisesti tuottamaan hyväksyttävää tekstiä.	</span>
            </span>
            </form><br>        
          
         <form action="">5.3 Raportointiohjeiden noudattaminen				
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 5
            <span style="width:500px;">Noudattaa kaikilta osin JAMKin raportointiohjeistusta.	</span>
            </span>              
  
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 4
            <span style="width:500px;">Noudattaa JAMKin raportointiohjeistusta. Yksityiskohdissa voi olla vähäisiä puutteita.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 3
            <span style="width:500px;">Noudattaa keskeisiltä osin JAMKin raportointiohjeistusta (lähdemerkinnät, rakenne, ulkoasu). Yksityiskohdissa voi olla puutteita.	</span>
            </span>
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 2
            <span style="width:500px;">Noudattaa JAMKin raportointiohjeistusta. Ohjeidenhallinta on kuitenkin melko puutteellista.	</span>
            </span>   
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 1
            <span style="width:500px;">Noudattaa JAMKin raportointiohjeistusta. Ohjeistuksen noudattaminen on kuitenkin erittäin puutteellista.	</span>
            </span>              
              
            <span class="dropt" title=""><input type="radio" name="grade" value="5"> 0
            <span style="width:500px;">Ei noudata JAMKin raportointiohjeistusta.	</span>
            </span>
            </form><br>     
                
              </div>
          </div>                
          

      </article>
          
      </section>
      

     

          
      </main>
       
      <footer>
        © 2017 Tean BODKA ©. Kaikki oikeudet pidätetään.
      </footer>
   

    </body>
    
</html>
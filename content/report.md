---
title: "Report - Viza's page"
...
Redovisningar
=========================

Kmom01
------------------------
**Jag tänkte skriva lite om designen på min sida innan jag besvarar frågorna.**
Bland det första jag fixar på mina hemsidor är de (fula) blåa länkarna som är standard. Jag valde
en utstickande orange färg på både navbaren och länkarna, så de syns tydligt mot det annars neutrala
färgtemat som går igenom hela sidan. För ögats skull gjorde jag sidan ljus och enkel i färgerna
så att det är enkelt att hitta allt och läsa texterna (svart på vitt).
Min header är gjord i photoshop och jag höll även den enkel med en ljus bakgrund och med mitt namn.

#### Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under det kommande året.
Det jag verkligen vill bli bättre på är just att programmera i objektorienterad PHP, vilket vi lärde
oss i kursen oophp. Jag läste aldrig klart den kursen så jag ligger lite efter där men det är aldrig
för sent att lära sig, bara man vill! Objektorientering har alltid varit något jag gillat, då man kan
göra så mycket mer med klasser och när man väl vet hur allt det där hänger ihop kan man skapa väldigt
kraftfulla program.
Det är väldigt svårt för mig att komma på några av mina styrkor, då php faktiskt inte är mitt favoritspråk
att programmera i (tacka vet jag JavaScript). Om jag får tänka tillbaka på något som jag gillat tidigare
och som inte gett mig allt för stora problem så får jag nog säga databaser med MySQL. Det gillade jag
verkligen att arbeta med i htmlphp-kursen och jag tyckte inte det var speciellt svårt att få det att fungera.
Dock tror jag inte vi kommer ha så mycket med databaser att göra i denna kurs, så jag får helt enkelt försöka
stärka mig i PHP som programmeringspråk över lag.

#### Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?
Jag kikade på [denna sida](http://www.archer-soft.com/en/blog/top-7-best-php-frameworks-2017),
som kom upp först när jag googlade "best frameworks for php 2017". De som listades som de sju främsta
ramverken var följande:

* CakePHP
* Yii
* CodeIgniter
* Laravel
* Symfony
* Phalcon
* Zend

#### Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.
Om dessa communities inte hade funnits tror jag inte jag hade kunnat klara någon av de kurser jag läst
hittills... Om jag fastnar på något och googlar mitt problem hittar jag i 99/100 fall alltid ett inlägg
på stackoverflow där någon haft exakt samma problem. Det finns jättemånga duktiga programmerare där ute
som flitigt är med och svarar på dessa foruminlägg och hjälper oss mindre kunnande.
Så jag tycker dessa communities förtjänar sin plats på internet och de har hjälpt mig och många andra
med att lösa problem enkelt och smidigt.

#### Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?
Jag tror inte att vi kommer se en helt ramverkslös värld inom en snar framtid, då man behöver både och
för att tillfredställa alla. De som inte är speciellt erfarna inom skapandet av hemsidor vill säkert
ha ett färdigt ramverk att bygga på, medan de riktigt kunniga säkert vill bygga från grunden utan att
känna sig begränsade av moduler, så som det beskrivs i videon. Jag tror själv att jag kommer gå mot den
ramverksfria delen i framtiden, just för att man kan skräddarsy mer och välja vilka delar man vill använda.

#### Hur gick dina förberedelser inför kommentarssystemet?
Just som jag skrev högre upp att vi nog inte kommer behöva använda databaser i denna kurs, tänkte
jag här att det vore ett perfekt sätt att lagra och publicera kommentarer! Längre än så har jag
nog inte kommit i mitt planerande men det ska bli en rolig utmaning att fixa ett kommentarssystem.

Kmom02
------------------------
*Notis: Jag har inte skrivit mina vyer i markdown ännu men efter en diskussion med programansvarig fixar jag
även det i nästa kursmoment. Nu är allt skrivet i html i vyerna men som sagt; jag löser det!*
***Notis2: Jag har fixat markdown inför nästa kursmoment nu!***

#### Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modell-begreppet, så som du ser på det?
När jag först såg övningen om MVC trodde jag inte att jag använt det förut, men sedan kom jag på
att jag visst har kommit över det förr: i kursen Webapplikationer vi läste i våras. Där jobbade man
med det i Mithril och vad jag kan se är det inte riktigt samma struktur på det hela nu i ramverk1-kursen.

För att läsa på om MVC inför kursmomentet läste jag den bifogade artikeln samt på wikipedia (svenska
och engelska versionerna). Av det jag läst kan jag se några fördelar, såsom att man kan ändra saker i
modellen som inte direkt påverkar det som är skrivet i vyerna. Detta kan vara en stor fördel om det är
fler personer som arbetar på samma projekt, så att det inte blir pannkaka av allt när alla försöker
ändra i samma fil.

#### Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?
Artiklerna på wikipedia var ganska rätt fram om vad SOLID betyder så det gick snabbt att ta reda på
grunden i begreppet. SOLID består helt enkelt utav fem olika designprinciper som ska göra objektorienterad
design mer förstående och flexibel. Riktlinjerna hjälper utvecklaren att skapa bättre kod utan onödiga
implementationer med mera.

#### Gick arbetet med REM servern bra och du lyckades integrera den i din me-sida?
Det gick bra att göra övningen och jag gjorde bara samma sak för att sedan integrera REM Servern i
min me-sida. Jag hade ett litet problem med att datan var tom när man körde /api/users. Detta löstes
genom att köra /init, både lokalt och på studentservern.

#### Berätta om arbetet med din kommentarsmodul, hur långt har du kommit och hur tänker du?
Mitt kommentarssystem är (som synes) inte fullt fungerande ännu. Hittills kan man skriva en
kommentar, posta den och se sin postade kommentar. Den sparas dock inte i någon session, databas eller
liknande. Jag tänkte vänta med det till nästa kursmoment då man ska spara kommentarerna i en databas.
Sedan har jag inte använt MVC eller samma struktur som REM Servern ännu men även det ska fixas i nästa
kursmoment. Jag skickar in det såhär just nu på grund av att jag vill komma vidare med nästa kursmoment.
Så länge fixade jag en snygg design på kommentarssidan, så det är i alla fall fixat och klart!

Kmom03
------------------------
#### Hur känns det att jobba med begreppen kring dependency injection, service locator och lazy loading?
Just nu vet jag inte riktigt vad jag ska säga om det... Det känns som att det blev en del copy-paste
och att man ändrade lite småsaker i sina filer och sedan funkade allt som vanligt. Men jag antar att
man kommer se fördelarna senare när man ska bygga vidare på DI i framtida filer. Principen verkar vara
bra men vi har ännu inte testat på det så mycket själva, så det är svårt att reflektera över det känner jag.

#### Hur känns det att göra dig av med beroendet till `$app`, blir `$di` bättre?
Det blir i alla fall mindre kod att skriva, och såklart mindre beroende. Men som jag nämnde ovan känns
det lite otydligt om vad som faktiskt blir "bättre". Vi får helt enkelt se senare hur det känns.

#### Hur känns det att återigen göra refaktoring på din me-sida, blir det förbättringar på kodstrukturen, eller bara annorlunda?
När man blev av med `$app` känndes det som att strukturen blev mer "clean" och lättare att tyda än innan. Annat
än det tycker jag mest att det endast blev annorlunda. Jag antar att jag kommer se det på ett annat (förbättrat)
sätt i kommande kursmoment när jag bygger vidare på `$di` och överger beroendet till `$app` totalt. Jag hade lite
problem med min REM Server efter refaktoreringen, att sidan /api/users inte kunde hittas. Detta eftersom jag i
min route2 hade satt `"mount = null"`, men efter en ändring till `mount = "api"` fungerade allt igen.

Jag var även lite förvirrad när jag gjorde den andra övningen, när man skulle konfigurera routern i Anax. Det
stod att man skulle ändra i modulen anax/page, som låg i vendormappen. Jag tycker det känns lite konstigt att
ändra i den mappen, så jag kopierade över filerna `PageRender` och `PageRenderInterface` som låg i src/Page i vendor, till min egen src/Page. Jag har testat att göra samma ändringar både i vendor samt min egen mapp, och sidan fungerar utmärkt i båda fallen. Det känns som sagt bäst att ändra i sina egna filer samt att samla alla dessa moduler på samma ställe. Jag antar att detta var meningen från början, bara att jag var lite förvirrad.

#### Lyckades du införa begreppen kring DI när du vidareutvecklade ditt kommentarssystem?
Jag väntar med att införa dessa begrepp tills nästa kursmoment, för att få in detta i tid.

#### Påbörjade du arbetet (hur gick det) med databasmodellen eller avvaktar du till kommande kmom?
Som jag svarade här ovan: jag väntar med det. Jag har lagt till modulen anax/database som förberedelse
men jag känner att det är enklare att fixa ett fungerande kommentarssystem i kmom04. Där kommer allt
gås igenom i övningarna så jag känner att det är smartare att implentera allt då, så att allt blir
rätt från början.

#### Allmänna kommentarer kring din me-sida och dess kodstruktur?
Det känns som att jag får bättre och bättre koll på alla moduler och kodstrukturen överlag, ju längre
vi kommer. Om något går fel kan jag relativt enkelt lokalisera var det är fel för att sedan lösa problemet.
Detta plus felsökning har gjort att problemen varit få och enkla att lösa i detta kursmoment, vilket
gör mig glad!

Kmom04
------------------------
**De användare som finns att testa med är:**

* **doe - doe**
* **admin -admin**

#### Hur gick det att integrera formulärhantering och databashantering i ditt kommentarssystem?
Det har tagit väldigt lång tid för mig att bli klar med detta på grund av en annan kurs som behövt så gott
som all min tid. Men förutom det har det faktiskt gått över förväntan med integrationen. Visst var det
lite klurigt men det känns skönt att man har koll på den kod man skrivit och vet hur allting fungerar
och hänger ihop. Jag är relativt stolt över hur systemet blev (förutom delete-funktionen av kommentarer)
och tycker det är enkelt att navigera mellan sidorna och skriva kommentarer samt skapa användare. Det här
med delete-funktionen på kommentarerna gillar jag inte riktigt upplägget med att man kommer till en ny
sida och sedan i en dropdown väljer man den kommentar man vill ta bort, vilket endast är en: den man klickade på.
För att lösa det på något snyggare sätt hade jag behövt bygga om hela mitt kommentarssystem igen och det
är inte riktigt något jag orkar fixa, så det får se ut som det gör. Det fungerar i alla fall.

#### Berätta om din syn på Active record och liknande upplägg, ser du fördelar och nackdelar?
Det är skönt att med hjälp av Active Record kunna få bort detta med repetetiv kod som annars lätt kan
uppstå. Det gör allt arbete med databasen enkelt och man behöver inte tänka riktigt på själva "databas-delen",
så att säga. Man hämtar det man behöver genom att skapa ett nytt klassobjekt, hämtar, ändrar och sparar. Klart.
Klasser är bra grejer det.

Nackdelen med detta är väl kanske att man undrar vad det är som egentligen händer bakom allt detta Active Record.
Just nu kan jag inte se några fler nackdelar och har inte riktigt reflekterat över vad som kanske händer "bakom kulisserna" men vi får se, det kanske kommer upp något mer negativt i framtiden.

#### Utveckla din syn på koden du nu har i ramverket och din kommentars- och användarkod. Hur känns det?
Som jag nämnde tidigare tycker jag om min struktur på koden i både routes, klasser och vyer. Allt är samlat på
sin plats och det är inte för mycket onödig kod i vyerna. Precis som det ska vara. I början hade jag lite onödigt
många if-else statements iställer för att lägga allt i en if-sats. Det blev mycket snyggare kod och färre rader
i vyerna. Sedan att det mesta samlas i klasserna med Active Record gör att man endast kan kalla på en variabel
i vyn så fungerar allt, utan att stöka till det allt för mycket. Jag gillar detta upplägg med uppdelade filer
(om än något många filer) skarpt!

#### Vad tror du om begreppet scaffolding, kan det vara något att kika mer på?
Det var ett väldigt smidigt begrepp som gör att man enkelt kan köra igenom övningarna en gång och sedan bara
scaffolda fram koden man samlat på sig därifrån, till sitt eget projekt i anax. Annars har jag behövt köra om
övningen igen i min anax-mapp så detta är mycket trevligare och tidssparande. Scaffolding kommer jag definitivt
använda mer i framtiden.

Kmom05
------------------------
#### Hur gick arbetet med att lyfta ut koden ur me-sidan och placera i en egen modul?
Det gick helt okej, blev lite förvirrad av övningen med REM-servern så valde att inte lita fullt på den. I stället plockade jag ut de relevanta bitarna ur övningen och applicerade till min egen modul. Det gick bra överlag och jag hade som tur var inte vävt in mina user-klasser i kommentarssystemet, utan de arbetar var försig. Detta gjorde det enkelt att lyfta ut koden för endast kommentarerna och skapa en egen modul för det. Jag läste att vissa varit tvungna att integrera användarna i sin kommentarsmodul också men det slapp jag som tur var.

#### Flöt det på bra med GitHub och kopplingen till Packagist?
Jodå det var enkla beskrivningar på Packagists hemsida och inga konstigheter med hur man skapade en ny modul till Packagist samt hur man kopplade ihop det med GitHub.

#### Hur gick det att åter installera modulen i din me-sida med composer, kunde du följa du din installationsmanual?
Eftersom jag redan hade de flesta filerna i min me-sida från början behövde jag inte göra så mycket. Det som behövde göras var att installera modulen med `composer`, ändra lite namespaces i `di.php` samt lägga till autoloadern i `composer.json`. Skönt när integrationen går enkelt!

Däremot fick jag ett fel från det förflutna, där jag missat att använda `$di` i min `navbar.php`... Tur att det inte blev några större fel än så i alla fall.

#### Hur väl lyckas du enhetstesta din modul och hur mycket kodtäckning fick du med?
Jag testade endast en grej men tyckte inte jag kunde testa fler relevanta saker så lät det vara så. Nu vet jag hur man testar med `phpunit` och det är det viktigaste. Kodtäckningen blev 16% i hela modulen och nästan 67% i klassen `UpdateForm.php`.

#### Några reflektioner över skillnaden med och utan modul?
Färre filer kanske men annars fungerar det i princip likadant som innan, förutom att alla klasser till `Comment` nu endast ligger i modulen. Ändå kul att testa nya sätt att bygga upp sina projekt och jag kan nog tänka mig använda detta i framtida projekt, speciellt om man behöver återanvända moduler. Kommentarssystem kan ju alltid vara trevligt att ha på flera hemsidor.

Kmom06
------------------------
#### Har du någon erfarenhet av automatiserade tester och CI sedan tidigare?
Ja jag har använt Travis, Circle CI, CodeClimate och Scrutinizer förr (säkert fler tjänster som jag ej minns) och har tagit för vana att alltid integrera Travis och CodeClimate i mina projekt. Därför hade jag redan dessa två integrerade innan detta kursmoment men jag hade inte fått med Scrutinizer, så den är nu på plats.

#### Hur ser du på begreppen, bra, onödigt, nödvändigt, tidskrävande?
Det är bara positivt från min sida. Det är skönt att låta dessa tjänster leta upp problem och förbättringar i koden så man själv slipper sitta och leta manuellt. Detta sparar massor av tid om man t.ex. håller på med större projekt (speciellt tillsammans med andra utvecklare) där man slipper lägga för mycket tid på denna typ av testning. Det blir en hel del manuell testning ändå så det är skönt att i alla fall ha detta gjort automatiskt.

#### Hur stor kodtäckning lyckades du uppnå i din modul?
Samma som förr, gjorde inga ändringar där.

#### Berätta hur det gick att integrera mot de olika externa tjänsterna?
Det gick smidigt då jag redan gjort detta x antal gånger innan. Så det gick som på räls.

#### Vilken extern tjänst uppskattade du mest, eller har du förslag på ytterligare externa tjänster att använda?
Scrutinizer är nog den mest täckande då den äver testar kodkvalitén. Innan har jag alltid använt både Travis och CodeClimate men med Scrutinizer täcker man allt som de gör tillsammans. Så jag ska nog ta och börja använda Scrutinizer lite oftare i framtiden. Sedan är det ju lite kul att ha fler badges att visa upp på sin GitHub. Det ser lite festligt ut med flera gröna badges på rad.

Kmom07/10
------------------------
Redovisningstext kommer snart...

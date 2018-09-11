---
title: "Report"
...
Redovisnings-sida
=========================

#Kmom01

###Uppgift 1

Detta var ju ungefär som början i oophp. Så har gjort detta innan, inga problem
med att sätta upp sidan. Skillnaderna jag ser nu med denna versionen är att den delar up koden
mer på visa ställen och samt markdown sidorna. Använde mig av ett bootstrap tema
.

###1. Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under det kommande året.

####Code Style Guide
Skriva kod till en vis standar, om man kolla alla dem "PSR" som länkas så skriver vi oftast koden till den standaren. Jag antar att kommadot "dbwebb validate kmom" checkar det till en viss del och vi har blivit övade lite i smyg. Men ja kända igen det mesta från detta kapitel.


####Language Highlights
Här skrivs det mycket om objekt orienterad PHP, funktionell programmering, namespaces. Mycket av
det känner jag igen från oophp och php kursen. Tror jag har okej koll på detta.

Meta Programming: kände ej igen <br>
Command Line Interface: har sätt det innan men inte jobbat med det <br>
Standard PHP Library: Förekommer i Anax <br>
Xdebug: inte jobbat med(tror jag)

####Dependency Management
Composer: Jobbat med det i ett par kurser men fortfarande inte helt inne på hur
jag skulle använda det om jag skulle gjort helt eget projekt

Pear ej jobbat med

####Coding Practices
Känner igen mycket på denna del, det är ju mest grunder som vi oftast gått igenom i labbar.

Design Patterns: Något jag behöver tänka på.

Sen om man kommer till delarna under design patterns. Allt där under kändes nytt för mig.

####Dependency Injection
kännde ej igen denna delen.

####Databases
Jo har jobbat med mysql och pdo, känner igen mig på dem flesta delar. Vill fortfarande bli
bättre på att förstå mig på pdo.

####Templating
”Templetes” och ”view filer” har jag jobbat med. ”Compiled templet twig” har jag också jobbat med
men inte ”brainy” och ”smarty”.

####Errors
1. först och främst var jag osäker på hur ”Errors” hanteras i php <br>
2. Sen är jag dålig på att använda try/cath exceptions <br>

####Security
Jag har ju ”hashat” lösenord och använt mig av ”htmlentisis” hade ingen aning om att det fanns så många filter funktioner. Rätt mycket att tänka på när det gäller säkerhet när man bygger större system. Väldigt mycket jag inte kände igen.

####Testing
Enda jag kände igen här var phpunit testning vilket vi har gjort, samt funktionell testning och lite hur man ska skriva sina tester. Kände ej igen dem andra testning verktygen. Testning är något som något som jag vill skriva mer av.

####Servers and Deployment
Har inte jobbat med servrar med php.

####Virtualization
Jobbat med virtuell box innan. Men inte för att testa hemsidor eller med php.

####Caching
Har inte jobbat med det här innan (tror jag iallafall)

####Documenting your Code
Har sett detta i mos kod men inte använt det själv. Får väll börja dokumentera min kod på detta
sätt.

####Community
Nej men detta kräver ju att jag komunicerar med folk.


###2. Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?

Enligt en senare av: https://www.sitepoint.com/best-php-framework-2015-sitepoint-survey-results/
Från 2015 så är Laravel störst, men det är ju som mos säger deras undersökning var inte så
vetenskapligt gjord. Alla som varit med och rösta kommer från sitepoint sidan.

Enligt en undersökning av: https://coderseye.com/best-php-frameworks-for-web-developers/
Där dem gav ut en survey till 7500 av deras prenumeranter så var Laravel även där störst.  Denna
survey var från 2017, men även här var den inte speciellt vetenskapligt gjord.

Men detta är två källor som säger Laravel så jag nöjer mig med det resultatet.

###3. Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.

Ingen erfarenhet själv om kommuniteter, aldrig varit med i någon inom programmerings området. Om
man inte räknar med dbwebbs forum. Men antar väll att dem är bra, folk kan få hjälp, komma på
idéer och hitta mer information om området.

###4. Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?

Så som han förklarar det så låter det ju bra, att folk inte ska bli för fast i det ramverk dem kodar i. Att skriva sin kod enbart i ”librarys” och sen enkelt kunna ta dem folders dem behöver till sitt nya projekt och inte behöva tänka på om det fungerar i just det ramverket. Jag tycker själv att det är smidigt att jobba med Anax så jag vet inte direkt vad jag tycker. Kommer bilda mig en mer omfattad åsikt efter jag har fått mer erfarenhet.


###5. Hur gick dina förberedelser inför kommentarssystemet?
Det gick bra.

<hr>

#Kmom02
**1.Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modell-begreppet, så som du ser på det?**

Jag jobbade med det i OOPHP kursen. Jag läste igenom dem wiki sidorna vi blev tilldelade och samt artikeln. Det blir en klar uppdelning av kod, vilket gör koden mer läsbar och mindre rörig. Det blir då också enklare att utöka sitt system.


**2.Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?**

- S: En klass borde bara ha en anledning att ändra sig.
- O: Öppen för utökning men stängd för modifiering.
- L: Principen av klassen ska alltid vara den samma men metoder kan ändras.
- I: Separation av koden i ”interfacen” ska vara tydlig.
- D: Stora moduler ska inte vara beroende av små moduler. Båda modulerna ska vara flexibla.

Änvände video vi blev tilldelad som källa.

**3.Gick arbetet med REM servern bra och du lyckades integrera den i din me-sida?**

Det gick bra. Jag gjorde bara som exemplet visade hade inga problem där. La till klasserna och route filen. Sen försökte jag studera koden så mycket som möjligt. Förstår mig på det en del men inte helt.

**4.Berätta om arbetet med din kommentarsmodul, hur långt har du kommit och hur tänker du?**

Jag tog så mycket inspiration som jag kunde från remserver modulen, hur koden var strukturerad.  Gjorde två filer med två klasser. En ”Comment” klass där alla funktioner som ändrar i koden ligger. Samt alla funktioner som tar fram viktiga värden. Sen en CommentController klass som använder sig av funktionerna från ”Comment” för att utföra ändringarna.  

Tycker att jag lyckades okej kan nog strukturera upp koden i CommentController klassen bättre och har nog några funktioner i den som borde ligga i Comment klassen istället. Använde mig av Sessioner istället för remservern eftersom jag inte förstod helt hur man la till värde och tog bort värden. Försökte ett tag men kom ingen vart så det fick bli Sessioner istället.

#Kmom03

**Uppgift 1**
Följde övningarna som visade hur man skulle göra. Fungerade bra med det att införa ”di” i mitt system. Att införa ”di” i min kommentar klass var inga svårigheter hade redan en injekt funktion så var bara att byta så att jag injektade dem klasser jag ville ha med di istället. Osäker på om jag har skrivit min ”comment controller” klass på ett bra sätt eller inte, men det duger väll så länge.
Hade lite problem med att implementera dem nya routerna eftersom jag skickade in vissa parametrar till min ”comment controller” klass innan. Vilket jag inte kunde göra nu. Men det löste sig tillslut med. Rätt nöjd med min ”comment” klass men mindre nöjd med min ”comment controller” klass



**1.Hur känns det att jobba med begreppen kring dependency injection, service locator och lazy loading?**

Det kändes bra. Lite förvirrande i början men tycker att jag förstår grunderna av dem nu.


**2.Hur känns det att göra dig av med beroendet till $app, blir $id bättre?**
Kändes bra. Tycker koden ser bättre ut överlag och den är också enklare att arbeta med. Enda problemet jag hade var routerna. Tyckte det var jobbigt att jag inte kan skicka in parametrar till mina funktioner.

**3.Hur känns det att återigen göra refaktoring på din me-sida, blir det förbättringar på kodstrukturen, eller bara annorlunda?**

Det är bra. Känns som att jag skriver bättre och bättre kod. Tycker även att kodstrukturen blir bättre när man använder sig av ”$di”. Ja överlag gillar jag att lära mer olika sätt att strukturera min kod.

**4.Lyckades du införa begreppen kring DI när du vidareutvecklade ditt kommentarssystem?**
Ja det gjorde jag. Tyckte inte det var några större svårigheter att införa det i min kommentar klass.

**5.Påbörjade du arbetet (hur gick det) med databasmodellen eller avvaktar du till kommande kmom?**
Skrev en simple mysql kod med två tabeller för kommentarer och användare. Införde databas klassen i mitt system. Men jag väntar med att införa den i min kommentar klass till nästa kursmoment.

**6.Allmänna kommentare kring din me-sida och dess kodstruktur?**
Gillar kodstrukturen mer nu. Tycker den ser bättre ut med ”$di”. Tycker det var enklare att använda dem gamla routerna än dem nya. Så i stort sätt gillade jag rout strukturen så som den var innan med ”$app”, men resten blev bättre.





#Kmom04
**Uppgift 1**<br>
Integrera dem delar som visades i övningarna. Kommer nog att fixa till lite saker till nästa kursmoment. T.ex nu har jag så att admin inte kan ändra lösenord på andra användare(det kommer jag införa). Kommer även att införa förbättringar i navbaren och göra så att kommentar namnen på kommentar sidan ändras när en användare ändrar sin mejl.

**Uppgift 2 (Integrera bok exemplet)**<br>
Inga svårigheter här. Följde övningen och gjorde som det visades där.

**Uppgift 3 (Kommentarsystem)**<br>
Vet ej nu i efterhand inte varför jag skrev om min kommentars klass. Jag skrev den liknande som bok klassen. Men nu i efterhand tänker jag varför jag inte bara skrev en extension till min nuvarande kommentar klass och t.ex bara tog slutvärdena av den klassen och placerade in dem i en databas. Men annars gick det bra.


**1. Hur gick det att integrera formulärhantering och databashantering i ditt kommentarsystem?**<br>
Det gick bra. Bortsett från att jag gjorde lite onödigt arbete som jag förklarade ovan.


**4. Berätta om din syn på Active record och liknande upplägg, ser du fördelar och nackdelar?**<br>
Fördelen är ju att den är mycket enklare att använda. Samt att koden blir mer uppdelad. Kollade igenom klassen och förstår mig inte helt på den, men jag vet hur jag använder mig av den. Vet inte riktigt om jag föredrar detta sättet eller den andra databas klassen jag hade, jag får se i framtiden.


**3. Utveckla din syn på koden du nu har i ramverket och din kommentars- och användarkod. Hur känns det?**<br>
Det känns bra. Tycker att jag känner mig inne på nästan allt. Jag förstår vad som händer och hur det mesta fungerar.

**4. Om du vill, och har kunskap om, kan du även berätta om din syn på ORM och designmönstret Data Mapper som är närbesläktade med Active Record. Du kanske har erfarenhet av likande upplägg i andra sammanhang?**<br>
Jag skippar denna :).

**5.Vad tror du om begreppet scaffolding, kan det vara något att kika mer på?**<br>
Ja det tycker jag.


#Kmom05
**1.Hur gick arbetet med att lyfta ut koden ur me-sidan och placera i en egen modul?**<br>
Där var det inga problem. Jag följde övningen och fixade det rätt så snabbt. Sen var det väll lite småfel här och där som man hela tiden fick fixa till under testningen.
<br>

**2.Flöt det på bra med GitHub och kopplingen till Packagist?**<br>
Det gick sådär, kunde ej göra så min modul updaterades automatiskt. Gjorde som
det stod på deras hemsida mendet funkade ej. Men annars fungerade kopplingn bra.
<br>
**3.Hur gick det att åter installera modulen i din me-sida med composer, kunde du följa du din installationsmanual?**<br>

Ja det fungerade perfekt. Enda problemet var att errorController inte vill visa mina view sidor utan bara ger mig ”404 Page not found”. Trots att om jag stänger av den fungerar sidorna perfekt och modulen fungerade på ett min mini anax jag(dev, så som det gjordes i övningen). Så har stängt av errorController tills vidare.
<br>

**4.Hur väl lyckas du enhetstesta din modul och hur mycket kodtäckning fick du med?**<br>

Detta för mig var den svåraste delen, tills jag listade ut hur jag skulle göra. Fick läsa på rätt mycket inom phpUnit och googla mig fram. För det första viste jag inte hur jag skulle få in ”di” i min testning för mina klasser och samt viste jag inte hur jag skulle testa funktioner som t.ex byggde upp sidor med ”pageRender”.
<br>

Men jag hittade ett par exempel till slut och samt gjorde en mock klass som fick ersätta vissa klasser.
<br>

**5.Några reflektioner över skillnaden med och utan modul?**<br>
Inte direkt.


#Kmom06
**1. Har du någon erfarenhet av automatiserade testar och CI sedan tidigare?**

Ja jag har använt Travis och CI innan i en annan kurs men inte med mysql databas.


**2. Hur ser du på begreppen, bra, onödigt, nödvändigt, tidskrävande?**

Jag tycker dem är bra och användbara. Lite tidskrävande men det är värt det.


**3. Hur stor kodtäckning lyckades du uppnå i din modul?**

Jag har testat allt utom submit funktionerna för ”create”, ”delete” och ”edit”. Hittade inget sätt att testa submit men det borde väl gå på något sätt.


Mina andra tester, testar mer så att programmet inte kraschar när den kör igenom koden. Gjorde också så att den första kommentaren i databasen är till för testning och syns inte på kommentar sidan.


**4. Berätta hur det gick att integrera mot de olika externa tjänsterna?**

Det gick bra lite struligt i början eftersom mina tester använder sig av en mysql databas så jag fick ändra lite i ”.yaml” filerna. Tog ett tag eftersom jag inte hittade en bra tutorial på hur man fixade mysql i Travis och Scrutinizer men det löste sig till slut.


**5. Vilken extern tjänst uppskattade du mest, eller har du förslag på ytterligare externa tjänster att använda?**

Jag gillade Scrutinizer mest eftersom den kör testerna och sen kollar den kodstandar och sådant också. Har ingen erfarenhet utav andra tjänster så kan inte ge några förslag.



#Kmom010

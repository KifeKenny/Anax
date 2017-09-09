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
text
#Kmom04
text
#Kmom05
text
#Kmom06
text
#Kmom010

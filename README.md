<h1>salone Whiskers</h1>

<h3>Per far partire l'applicativo</h3>
<p>una volta fatta la clone del repository e importato il progetto

esegui le seguenti righe nella cartella del  terminale del progetto nel ide:
composer --version

composer install

cp .env.example .env

modifica informazioi nel .env 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= il nome del db
DB_USERNAME= la tua username
DB_PASSWORD= la tua password del db

php artisan key:generate

scrivi nel terminale "php artisan migrate" per creare le tabelle

infine nel terminale del progetto scrivi "php artisan serve"
</p>



<h3>Funzionalità</h3>

Sito web dedicato alla ricerca di tutti i saloni e parrucchieri in Italia.
____________________________________________________________________________________________________________________________________________________________________________________________________________________

<ul>
    <li>Login e Register: Per creare un account</li>
    <li>Schermata home: Suddivisa in due sezioni: *Trattamenti* e *Nome del salone*. </li>
    <li>Trattamenti: Selezionando il trattamento, la data e la posizione, è possibile trovare i saloni disponibili.</li>
    <li>Nome del salone: Inserendo il nome del salone, si visualizzano i risultati di tutti i saloni corrispondenti.</li>
    <li>Navbar: Dispone di sette categorie: Capelli, Viso, Unghie, Depilazione, Corpo, Uomo e Massaggio.</li>
    <li>Dropdown: Ogni categoria ha delle sottocategorie che portano alla pagina con tutti i saloni che offrono quel servizio.</li>
    <li>Servizio: Vengono mostrati tutti i saloni che offrono il servizio selezionato, con accanto una mappa che visualizza le posizioni dei saloni. Sono presenti anche i filtri per data e posizione, oltre alla possibilità di ordinarli per prezzo.</li>
    <li>Salone:  Cliccando su un salone, si visualizzano i dettagli, tra cui immagini, servizi offerti, prezzi, recensioni, mappa collegata a Google Maps, descrizione del salone, orari e giorni di apertura.</li>
    <li>Profilo: Funzionalità di Logout, aggiunta di nuovi saloni e gestione dell'account.</li>
    <li>Aggiungi: Permette di inserire un nuovo salone con tutti i dettagli necessari: nome, indirizzo, numero civico, nome e cognome del proprietario, email, cellulare, orari di lavoro, servizi offerti, prezzi, ulteriori dettagli e immagini.</li>
    <li>Account:  Visualizza i saloni pubblicati dall'utente, con la possibilità di eliminarli. </li>
</ul>



____________________________________________________________________________________________________________________________________________________________________________________________________________________

<h1>Tecnologie usate</h1>

<ul>
    <li>Frontend: Laravel e Bootstrap</li>
    <li>Backend: Laravel </li>
    <li>Database: MySQL</li>
    <li>In piu: maps e le sue informazioni per avere le posizioni piu precise</li>
</ul>

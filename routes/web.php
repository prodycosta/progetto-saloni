<?php
use App\Http\Controllers\TrattamentiCapelliController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SaloneController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\CapelliController;
use App\Http\Controllers\CorpoController;
use App\Http\Controllers\DepilazioneController;
use App\Http\Controllers\MassaggioController;
use App\Http\Controllers\UnghieController;
use App\Http\Controllers\UomoController;
use App\Http\Controllers\VisoController;
use App\Http\Controllers\RecensioniController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/account', [AccountController::class, 'index'])->name('pages.account');
Route::get('/search-saloni', [SaloneController::class, 'searchSaloni'])->name('pages.saloni');



Route::get('/colpi-di-sole', [CapelliController::class, 'colpiDiSole'])->name('pages.capelli.colpi_di_sole');
Route::get('/colpi-di-sole/ajax', [CapelliController::class, 'colpiDiSole'])->name('colpi_di_sole.ajax');

Route::get('/piega', [CapelliController::class, 'piega'])->name('pages.capelli.piega');
Route::get('/piega/ajax', [CapelliController::class, 'piega'])->name('piega.ajax');

Route::get('/taglio-donna', [CapelliController::class, 'taglioDonna'])->name('pages.capelli.taglio_donna');
Route::get('/taglio-donna/ajax', [CapelliController::class, 'taglioDonna'])->name('taglio_donna.ajax');

Route::get('/taglio-e-piega-donna', [CapelliController::class, 'taglioEPiegaDonna'])->name('pages.capelli.taglio_e_piega_donna');
Route::get('/taglio-e-piega-donna/ajax', [CapelliController::class, 'taglioEPiegaDonna'])->name('taglio_e_piega_donna.ajax');

Route::get('/taglio-uomo', [CapelliController::class, 'taglioUomo'])->name('pages.capelli.taglio_uomo');
Route::get('/taglio-uomo/ajax', [CapelliController::class, 'taglioUomo'])->name('taglio_uomo.ajax');

Route::get('/trattamenti-capelli-specifici', [CapelliController::class, 'trattamentiCapelliSpecifici'])->name('pages.capelli.trattamenti_capelli_specifici');
Route::get('/trattamenti-capelli-specifici/ajax', [CapelliController::class, 'trattamentiCapelliSpecifici'])->name('trattamenti_capelli_specifici.ajax');



Route::get('/corpo', [CorpoController::class, 'index'])->name('corpo');
Route::get('/corpo/bendaggi', [CorpoController::class, 'bendaggi'])->name('pages.corpo.bendaggi');
Route::get('/bendaggi/ajax', [CorpoController::class, 'bendaggi'])->name('bendaggi.ajax');

Route::get('/corpo/circuito-spa', [CorpoController::class, 'circuitoSpa'])->name('pages.corpo.circuito_spa');
Route::get('/circuito-spa/ajax', [CorpoController::class, 'circuitoSpa'])->name('circuito_spa.ajax');

Route::get('/corpo/solarium', [CorpoController::class, 'solarium'])->name('pages.corpo.solarium');
Route::get('/solarium/ajax', [CorpoController::class, 'solarium'])->name('solarium.ajax');

Route::get('/corpo/trattamenti-anticellulite', [CorpoController::class, 'trattamentiAnticellulite'])->name('pages.corpo.trattamenti_anticellulite');
Route::get('/trattamenti-anticellulite/ajax', [CorpoController::class, 'trattamentiAnticellulite'])->name('trattamenti_anticellulite.ajax');

Route::get('/corpo/trattamenti-dimagranti', [CorpoController::class, 'trattamentiDimagranti'])->name('pages.corpo.trattamenti_dimagranti');
Route::get('/trattamenti-dimagranti/ajax', [CorpoController::class, 'trattamentiDimagranti'])->name('trattamenti_dimagranti.ajax');



Route::get('/depilazione', [DepilazioneController::class, 'index'])->name('depilazione');
Route::get('/depilazione/ceretta-braccia-o-ascelle', [DepilazioneController::class, 'cerettaBracciaOAscelle'])->name('pages.depilazione.ceretta_braccia_o_ascelle');
Route::get('/ceretta-braccia-o-ascelle/ajax', [DepilazioneController::class, 'cerettaBracciaOAscelle'])->name('ceretta_braccia_o_ascelle.ajax');

Route::get('/depilazione/ceretta-corpo', [DepilazioneController::class, 'cerettaCorpo'])->name('pages.depilazione.ceretta_corpo');
Route::get('/ceretta-corpo/ajax', [DepilazioneController::class, 'cerettaCorpo'])->name('ceretta_corpo.ajax');

Route::get('/depilazione/ceretta-gambe', [DepilazioneController::class, 'cerettaGambe'])->name('pages.depilazione.ceretta_gambe');
Route::get('/ceretta-gambe/ajax', [DepilazioneController::class, 'cerettaGambe'])->name('ceretta_gambe.ajax');

Route::get('/depilazione/ceretta-inguine-parziale', [DepilazioneController::class, 'cerettaInguineParziale'])->name('pages.depilazione.ceretta_inguine_parziale');
Route::get('/ceretta-inguine-parziale/ajax', [DepilazioneController::class, 'cerettaInguineParziale'])->name('ceretta_inguine_parziale.ajax');

Route::get('/depilazione/ceretta-inguine-totale', [DepilazioneController::class, 'cerettaInguineTotale'])->name('pages.depilazione.ceretta_inguine_totale');
Route::get('/ceretta-inguine-totale/ajax', [DepilazioneController::class, 'cerettaInguineTotale'])->name('ceretta_inguine_totale.ajax');

Route::get('/depilazione/ceretta-viso', [DepilazioneController::class, 'cerettaViso'])->name('pages.depilazione.ceretta_viso');
Route::get('/ceretta-viso/ajax', [DepilazioneController::class, 'cerettaViso'])->name('ceretta_viso.ajax');




Route::get('/massaggio', [MassaggioController::class, 'index'])->name('massaggio');
Route::get('/massaggio/massaggio-decontratturante', [MassaggioController::class, 'massaggioDecontratturante'])->name('pages.massaggio.massaggio_decontratturante');
Route::get('/massaggio-decontratturante/ajax', [MassaggioController::class, 'massaggioDecontratturante'])->name('massaggio_decontratturante.ajax');

Route::get('/massaggio/massaggio-del-viso', [MassaggioController::class, 'massaggioDelViso'])->name('pages.massaggio.massaggio_del_viso');
Route::get('/massaggio-del-viso/ajax', [MassaggioController::class, 'massaggioDelViso'])->name('massaggio_del_viso.ajax');

Route::get('/massaggio/massaggio-drenante', [MassaggioController::class, 'massaggioDrenante'])->name('pages.massaggio.massaggio_drenante');
Route::get('/massaggio-drenante/ajax', [MassaggioController::class, 'massaggioDrenante'])->name('massaggio_drenante.ajax');

Route::get('/massaggio/massaggio-rilassante', [MassaggioController::class, 'massaggioRilassante'])->name('pages.massaggio.massaggio_rilassante');
Route::get('/massaggio-rilassante/ajax', [MassaggioController::class, 'massaggioRilassante'])->name('massaggio_rilassante.ajax');

Route::get('/massaggio/massaggio-tailandese', [MassaggioController::class, 'massaggioTailandese'])->name('pages.massaggio.massaggio_tailandese');
Route::get('/massaggio-tailandese/ajax', [MassaggioController::class, 'massaggioTailandese'])->name('massaggio_tailandese.ajax');

Route::get('/massaggio/pressoterapia', [MassaggioController::class, 'pressoterapia'])->name('pages.massaggio.pressoterapia');
Route::get('/pressoterapia/ajax', [MassaggioController::class, 'pressoterapia'])->name('pressoterapia.ajax');



Route::get('/unghie', [UnghieController::class, 'index'])->name('unghie');
Route::get('/unghie/callus-peeling', [UnghieController::class, 'callusPeeling'])->name('pages.unghie.callus_peeling');
Route::get('/callus-peeling/ajax', [UnghieController::class, 'callusPeeling'])->name('callus_peeling.ajax');

Route::get('/unghie/manicure-semipermanente', [UnghieController::class, 'manicureSemipermanente'])->name('pages.unghie.manicure_semipermanente');
Route::get('/manicure-semipermanente/ajax', [UnghieController::class, 'manicureSemipermanente'])->name('manicure_semipermanente.ajax');

Route::get('/unghie/manicure', [UnghieController::class, 'manicure'])->name('pages.unghie.manicure');
Route::get('/manicure/ajax', [UnghieController::class, 'manicure'])->name('manicure.ajax');

Route::get('/unghie/pedicure-semipermanente', [UnghieController::class, 'pedicureSemipermanente'])->name('pages.unghie.pedicure_semipermanente');
Route::get('/pedicure-semipermanente/ajax', [UnghieController::class, 'pedicureSemipermanente'])->name('pedicure_semipermanente.ajax');

Route::get('/unghie/pedicure', [UnghieController::class, 'pedicure'])->name('pages.unghie.pedicure');
Route::get('/pedicure/ajax', [UnghieController::class, 'pedicure'])->name('pedicure.ajax');

Route::get('/unghie/rimozione-gel', [UnghieController::class, 'rimozioneGel'])->name('pages.unghie.rimozione_gel');
Route::get('/rimozione-gel/ajax', [UnghieController::class, 'rimozioneGel'])->name('rimozione_gel.ajax');



Route::get('/uomo', [UomoController::class, 'index'])->name('uomo');
Route::get('/uomo/barbiere', [UomoController::class, 'barbiere'])->name('pages.uomo.barbiere');
Route::get('/barbiere/ajax', [UomoController::class, 'barbiere'])->name('barbiere.ajax');

Route::get('/uomo/colore-uomo', [UomoController::class, 'coloreUomo'])->name('pages.uomo.colore_uomo');
Route::get('/colore-uomo/ajax', [UomoController::class, 'coloreUomo'])->name('colore_uomo.ajax');

Route::get('/uomo/depilazione-uomo', [UomoController::class, 'depilazioneUomo'])->name('pages.uomo.depilazione_uomo');
Route::get('/depilazione-uomo/ajax', [UomoController::class, 'depilazioneUomo'])->name('depilazione_uomo.ajax');

Route::get('/uomo/taglio-barba', [UomoController::class, 'taglioBarba'])->name('pages.uomo.taglio_barba');
Route::get('/taglio-barba/ajax', [UomoController::class, 'taglioBarba'])->name('taglio_barba.ajax');

Route::get('/uomo/trattamenti-viso-uomo', [UomoController::class, 'trattamentiVisoUomo'])->name('pages.uomo.trattamenti_viso_uomo');
Route::get('/trattamenti-viso-uomo/ajax', [UomoController::class, 'trattamentiVisoUomo'])->name('trattamenti_viso_uomo.ajax');



Route::get('/viso', [VisoController::class, 'index'])->name('viso');
Route::get('/viso/colorazione-ciglia-e-sopracciglia', [VisoController::class, 'colorazioneCigliaESopracciglia'])->name('pages.viso.colorazione_ciglia_e_sopracciglia');
Route::get('/colorazione-ciglia-e-sopracciglia/ajax', [VisoController::class, 'colorazioneCigliaESopracciglia'])->name('colorazione_ciglia_e_sopracciglia.ajax');

Route::get('/viso/depilazione-con-filo-orientale-sopracciglia', [VisoController::class, 'depilazioneConFiloOrientaleSopracciglia'])->name('pages.viso.depilazione_con_filo_orientale_sopracciglia');
Route::get('/depilazione-con-filo-orientale-sopracciglia/ajax', [VisoController::class, 'depilazioneConFiloOrientaleSopracciglia'])->name('depilazione_con_filo_orientale_sopracciglia.ajax');

Route::get('/viso/depilazione-sopracciglia', [VisoController::class, 'depilazioneSopracciglia'])->name('pages.viso.depilazione_sopracciglia');
Route::get('/depilazione-sopracciglia/ajax', [VisoController::class, 'depilazioneSopracciglia'])->name('depilazione_sopracciglia.ajax');


Route::get('/viso/extension-ciglia', [VisoController::class, 'extensionCiglia'])->name('pages.viso.extension_ciglia');
Route::get('/extension-ciglia/ajax', [VisoController::class, 'extensionCiglia'])->name('extension_ciglia.ajax');


Route::get('/viso/trattamenti-viso', [VisoController::class, 'trattamentiViso'])->name('pages.viso.trattamenti_viso');
Route::get('/trattamenti-viso/ajax', [VisoController::class, 'trattamentiViso'])->name('trattamenti_viso.ajax');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/aggiungi-salone', [SaloneController::class, 'create'])->name('pages.aggiungi_salone');
Route::post('/aggiungi-salone', [SaloneController::class, 'store'])->name('salone.store');
Route::get('/map', [MapController::class, 'mostraMappa'])->name('pages.map');
Route::get('/map/ajax', [MapController::class, 'mostraMappa'])->name('map.ajax');


Route::get('/salone/{id}', [SaloneController::class, 'show'])->name('salone.show');
Route::delete('/saloni/{id}', [SaloneController::class, 'destroy'])->name('saloni.destroy');
Route::get('/recensioni', [RecensioniController::class, 'index'])->name('recensioni.index');
Route::post('/recensioni/salva', [RecensioniController::class, 'salva'])->middleware('auth')->name('recensioni.salva');


Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('pages.forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestFormPost'])->name('pages.forgot-password.post');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('pages.reset-password');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPasswordPost'])->name('pages.reset-password.post');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

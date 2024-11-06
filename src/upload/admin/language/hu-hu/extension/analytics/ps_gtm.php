<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'Kezdő lépések';
$_['heading_setup']                = 'Google Tag Manager beállítása';
$_['heading_troubleshot']          = 'Gyakori hibakeresési lépések';
$_['heading_faq']                  = 'GYIK';
$_['heading_contact']              = 'Kapcsolatfelvétel a támogatással';

// Text
$_['text_extension']                = 'Bővítmények';
$_['text_edit']                     = 'Google Tag Manager szerkesztése';
$_['text_success']                  = 'Siker: A Google Tag Manager módosítása megtörtént!';
$_['text_group_ad_settings']        = 'Hirdetési beállítások';
$_['text_group_analytics_settings'] = 'Analitikai beállítások';
$_['text_group_security_settings']  = 'Biztonsági beállítások';
$_['text_group_advanced_settings']  = 'Fejlett beállítások';
$_['text_getting_started']          = '<p><strong>Áttekintés:</strong> A Playful Sparkle - Google Tag Manager bővítmény az OpenCart 3-hoz lehetővé teszi a marketingcímkék egyszerű kezelését és telepítését az OpenCart áruházában, programozói tudás nélkül. Ezzel a bővítménnyel optimalizálhatja a nyomkövetési beállításait, lehetővé téve a jobb analitikát és a hatékonyabb marketinget.</p><p><strong>Előfeltételek:</strong> Biztosítsa, hogy rendelkezik Google Tag Manager fiókkal, érvényes Measurement ID-vel, és hogy kompatibilis OpenCart 3.x+, PHP 7.3 verziót használ.</p>';
$_['text_setup']                    = '<p><strong>Google Tag Manager beállítása:</strong> Jelentkezzen be a <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">Google Tag Manager fiókjába</a>, ha még nem tette meg, hozzon létre egy új tárolót a weboldala számára, és szerezze meg a Measurement ID-jét. Ezután adja meg ezt az azonosítót a Playful Sparkle - Google Tag Manager bővítmény beállításainak kijelölt mezőjében az OpenCart áruházában.</p>';
$_['text_troubleshot']              = '<ul><li><strong>Measurement ID nem található:</strong> Ellenőrizze, hogy a megfelelő Measurement ID-t adta-e meg a bővítmény beállításaiban. Győződjön meg arról, hogy nincsenek extra szóközök vagy hibás karakterek.</li><li><strong>Címkék nem aktiválódnak:</strong> Győződjön meg arról, hogy a címkék megfelelően vannak konfigurálva a Google Tag Manager-ben a megfelelő aktiválók szerint. A <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> eszközt használhatja a címkék aktiválásának hibakeresésére.</li><li><strong>Engedélyezési problémák:</strong> Győződjön meg arról, hogy rendelkezik a szükséges engedélyekkel a Google Tag Manager fiókjában a címkék létrehozásához és kezeléséhez.</li><li><strong>Kompatibilitási problémák:</strong> Ellenőrizze, hogy az OpenCart verziója naprakész-e, és győződjön meg arról, hogy más telepített bővítmények nem ütköznek a Google Tag Manager beállításaival.</li></ul>';
$_['text_faq']                      = '<details><summary>Mi a teendő, ha nem látom a címkéim aktiválódását a Google Tag Manager-ben?</summary>Győződjön meg arról, hogy a Measurement ID-je helyes, és ellenőrizze, hogy a címkék publikálva vannak, és megfelelően vannak konfigurálva a megfelelő aktiválókkal.</details><details><summary>Hogyan ellenőrizhetem, hogy a bővítmény működik-e?</summary>Használja a <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> Chrome bővítményt, vagy a Google Tag Manager előnézeti módját, hogy megbizonyosodjon arról, hogy a címkék a várt módon aktiválódnak.</details><details><summary>Ez a bővítmény kompatibilis más bővítményekkel?</summary>Ez a bővítmény általában kompatibilis, de ajánlott tesztelni más, az oldalon telepített bővítményekkel az ütközések elkerülése érdekében. Ha problémák merülnek fel, ellenőrizze a már ismert kompatibilitási problémákat.</details><details><summary>Hogyan hárítsam el a gyakori címkeproblémákat?</summary>Tekintse meg a Google Tag Manager hibakeresési útmutatóját a gyakori címkeproblémák és a konfigurálás legjobb gyakorlatai kapcsán.</details>';
$_['text_contact']                  = '<p>További segítségért kérjük, lépjen kapcsolatba támogatási csapatunkkal:</p><ul><li><strong>Kapcsolat:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentáció:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Felhasználói dokumentáció</a></li></ul>';

// Tab
$_['tab_general']                   = 'Általános';
$_['tab_gcm']                       = 'Google Hozzájárulás Mód (GCM)';
$_['tab_help_and_support']          = 'Segítség &amp; Támogatás';

// Entry
$_['entry_status']                  = 'Állapot';
$_['entry_gtm_id']                  = 'Measurement ID';
$_['entry_gcm_status']              = 'GCM engedélyezése';
$_['entry_ad_storage']              = 'Hirdetés tárolása';
$_['entry_ad_user_data']            = 'Hirdetés felhasználói adatok';
$_['entry_ad_personalization']      = 'Hirdetés személyre szabása';
$_['entry_analytics_storage']       = 'Analitika tárolása';
$_['entry_functionality_storage']   = 'Funkcionalitás tárolása';
$_['entry_personalization_storage'] = 'Személyre szabás tárolása';
$_['entry_security_storage']        = 'Biztonsági tárolás';
$_['entry_wait_for_update']         = 'Frissítés várakozása';
$_['entry_ads_data_redaction']      = 'Hirdetési adatok eltakarása';
$_['entry_url_passthrough']         = 'URL továbbítás';
$_['entry_strict']                  = 'Szigorú';
$_['entry_balanced']                = 'Kiegyensúlyozott';
$_['entry_custom']                  = 'Egyedi';
$_['entry_gcm_profiles']            = 'GCM profilok';

// Help
$_['help_ad_storage']               = 'Szabályozza az adatok hirdetési célú tárolását, mint például hirdetési kattintások és konverziók nyomkövetése.';
$_['help_ad_user_data']             = 'Megadja, hogy a hirdetésekkel interakcióba lépő felhasználókról szóló adatok tárolásra kerülnek-e, ezáltal javítva a hirdetési célzást.';
$_['help_ad_personalization']       = 'Lehetővé teszi a hirdetések személyre szabását felhasználói adatok alapján, relevánsabb hirdetéseket biztosítva a felhasználók számára.';
$_['help_analytics_storage']        = 'Lehetővé teszi az analitikai célokra használt adatok tárolását, segítve ezzel a weboldal teljesítményének és a felhasználói viselkedés nyomon követését.';
$_['help_functionality_storage']    = 'Lehetővé teszi az adatok tárolását a weboldal funkcionális elemeinek támogatására, például felhasználói preferenciák vagy weboldal jellemzők javítására.';
$_['help_personalization_storage']  = 'Szabályozza a felhasználói élmény személyre szabásához szükséges adatok tárolását, például tartalom vagy ajánlások személyre szabását.';
$_['help_security_storage']         = 'Biztosítja a biztonsággal kapcsolatos adatok tárolását, beleértve a csalásmegelőzést és a biztonságos hozzáférés-ellenőrzést.';
$_['help_wait_for_update']          = 'Beállítja azt az időt (ezredmásodpercben), amelyet a hozzájárulási állapot frissítése előtt várni kell, ezzel biztosítva, hogy minden beállítás alkalmazva legyen.';
$_['help_ads_data_redaction']       = 'Eltakarja a hirdetésekkel kapcsolatos felhasználói adatokat, ezáltal védve a felhasználók magánéletét és elrejtve a személyazonosításra alkalmas információkat.';
$_['help_url_passthrough']          = 'Lehetővé teszi, hogy az URL átmenjen a hozzájárulási ellenőrzéseken, ami segíti a konkrét felhasználói útvonalak nyomkövetését anélkül, hogy személyes adatokat tárolna.';
$_['help_gcm_status']               = 'Engedélyezi a Google Hozzájárulás Módot (GCM), lehetővé téve az Ön weboldala számára, hogy alkalmazkodjon a felhasználói hozzájárulási beállításokhoz a Google címkék viselkedésének megváltoztatásával. Ez a mód adatvédelmi szempontból barátságos nyomkövetést tesz lehetővé, biztosítva az analitikai és hirdetési funkciók összhangját a hozzájárulási preferenciákkal.';
$_['help_gtm_id_locate']            = 'A Measurement ID-jének megkereséséhez jelentkezzen be a <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">Google Tag Manager fiókjába</a>. A munkaterületen keresse meg az azonosítót a vezérlőpulton "GTM-" előtaggal kezdődik, amelyet egyedi betűk és számok követnek, például "GTM-XXXXXXX". <a href="https://support.google.com/analytics/answer/12270356?hl=hu" target="_blank" rel="external noopener noreferrer">További részletes utasítások itt</a>.';


// Error
$_['error_permission']              = 'Figyelmeztetés: Nincs engedélye a Google Tag Manager beállításainak módosítására!';
$_['error_gtm_id']                  = 'A GTM azonosító mező kötelező. Kérjük, adja meg a Measurement ID-jét.';
$_['error_gtm_id_invalid']          = 'A GTM azonosító formátuma helytelen. Győződjön meg arról, hogy a GTM-XXXXXXX formátumot követi.';

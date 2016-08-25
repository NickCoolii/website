<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'Englisch',
        'download'                        => 'Download',
        'documentation'                   => 'Dokumentation',
        'forum'                           => 'Forum',
        'blog'                            => 'Blog',
        'support'                         => 'Hilfe',
        'donate'                          => 'Spenden',
        'store'                           => 'Shop',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong> ist ein als C-Erweiterung entwickeltes Web-Framework mit Fokus auf <a href=':1:'>Performance</a> und niedriger Ressourcennutzung.",
        'the_fastest_php_framework'       => 'Das schnellste<br />PHP Framework',
        'try_online'                      => 'Ausprobieren',
        'see_screencasts'                 => 'Screencasts ansehen',
        'everything_you_need_upper'       => 'ALLES WAS DU BRAUCHST',
        'full_mvc_applications'           => "Vollständige <a href=':1'>MVC-Anwendungen</a>",
        'single_module'                   => 'Einzelnes Modul',
        'multi_module'                    => 'Mehrere Module',
        'micro_applications'              => 'Minimalanwendungen',
        'orm'                             => 'ORM',

        'behaviors'                       => 'Behaviors',
        'relations'                       => 'Relationen',

        'events'                          => 'Events',
        'validations'                     => 'Validierung',
        'hydration'                       => 'Ergebnistypen',
        'logging'                         => 'Logging',
        'profiling'                       => 'Profiling',


        'template_engine_volt'            => 'Template-Engine (Volt)',
        'di_ioc'                          => 'DI/IOC',
        'events_management'               => 'Eventmanagement',
        'encryption'                      => 'Verschlüsselung',
        'http_request'                    => 'HTTP-Requests',
        'http_response'                   => '-Antwort',
        'http_cookies'                    => '-Cookies',
        'escaping'                        => 'Zeichenmasken',
        'filtering'                       => 'Zeichenfilter',
        'forms_builder'                   => 'Formulargenerierung',
        'forms_validation'                => 'Validierung',


        'pagination'                      => 'Paginierung',
        'annotations'                     => 'Anmerkungen',
        'security'                        => 'Sicherheit',
        'translations'                    => 'Übersetzungen',
        'assets_management'               => 'Inhaltsverwaltung',
        'universal_auto_loader'           => 'Universeller Autoloader',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'PHALCON FORUM',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => 'MAILT UNS',
        'services_upper'                  => 'DIENSTE',
        'consulting_upper'                => 'CONSULTING',
        'requirements_analysis'           => 'Anforderungsanalyse',
        'implementation'                  => 'Implementierung',
        'ongoing_support'                 => 'Laufende Unterstützung',
        'read_more'                       => 'mehr',
        'hosting_upper'                   => 'HOSTING',
        'phalcon_can_be_installed'        => 'Phalcon kann auf folgenden Systemen installiert werden',
        'main_upper'                      => 'ALLGEMEINES',
        'consulting'                      => 'Beratung',
        'hosting'                         => 'Hosting',
        'support_upper'                   => 'SUPPORT',
        'forum_community'                 => 'Forum / Community',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Bug-Tracker',
        'get_involved_upper'              => 'MITMACHEN',
        'team'                            => 'Team',
        'about'                           => 'Über uns',
        'roadmap'                         => 'Roadmap',
        'donate_to_phalcon'               => 'Dem Phalcon-Projekt spenden:',
        'or'                              => 'oder',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google+',
        'vimeo'                           => 'Vimeo',
        'amazing_contributors'            => 'Unsere tollen Mitwirkenden:',

        'download_phalcon'                => 'Phalcon Herunterladen',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows-DLLs',
        'download_developer_tools'        => 'Entwicklungswerkzeuge',
        'download_ide_stubs'              => 'IDE-Integration',
        'download_ubuntu'                 => 'Um Phalcon unter Ubuntu zu installieren folge diesen Schritten:',
        'download_ubuntu_or_debian'       => 'Ubuntu or Debian',
        'download_ubuntu_1'               => 'Wenn dir apt-add-repository fehlt führe folgendes aus:',
        'download_note'                   => 'Phalcon ist eine in C geschriebene Erweiterung, daher musst Du die passende Binary herunterladen oder neu kompilieren.',
        'download_compilation'            => 'Kompilieren',
        'download_compilation_1'          => 'Auf Linux kannst Du die Erweiterung mithilfe des Quellcodes kompilieren und installieren.',
        'download_requirements'           => 'Systemanforderungen',
        'download_requirements_1'         => 'Es werden einige vorinstallierte Softwarepakete benötigt:',
        'download_requirements_2'         => 'PHP5-Entwicklerressourcen',
        'download_requirements_3'         => 'GCC-Compiler',
        'download_compilation_11'         => '1. Um die Erweiterung zu kompilieren sind folgende Schritte erforderlich:',
        'download_compilation_12'         => '2. Füge die Erweiterung zur php.ini hinzu:',
        'download_compilation_13'         => '3. Zum Schluss noch den Webserver neu starten',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "Für ArchLinux ist ein <a href=':1:'>PKGBUILD</a> verfügbar.",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "Du findest das Softwarepaket <a href=':1:'>hier</a> (vielen Dank an <a href=':2:'>Mariusz Łączak</a>).",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'Eine Version für FreeBSD ist vorhanden. Du musst lediglich die folgenden Befehle ausführen um sie zu installieren:',
        'download_dependencies'           => 'Abhängigkeiten',
        'download_dependencies_1'         => 'Obwohl Phalcon nicht direkt auf andere PHP-Erweiterungen zugreift, nutzt es einige um die Funktionalität zu erweitern. Die genutzten Erweiterungen sind:',
        'download_dependencies_2'         => 'Es ist nicht notwendig, dass alle zuvor aufgelisteten Erweiterungen auf dem System installiert sind. Du kannst auch nur die PHP-Erweiterungen installieren, die für Deine Anforderungen notwenig sind. Beispielsweise kannst Du bei der Nutzung einer MySQL-Datenbank nur PDO und PDO/MySQL installieren und auf Oracle, SQlite, PostgreSQL und MongoDB verzichten.',
        'download_need_help'              => 'Benötiget Du Hilfe?',
        'download_need_help_1'            => "Falls Du Unterstützung benötigst, findest Du diese auf unserer  <a href=':1:'>Support-Seite</a>. Wir werden unser Bestes tun, um Dir zu helfen.",

        'download_windows_note'           => 'Wir empfehlen Ihnen dringendst die letztemögliche PHP-Version (passend zu unseren DLLs) zu nutzen, da Du nur auf diesem Weg den vollen Funktionumfang von Phalcon nutzen kannst.',
        'download_windows_stable'         => 'Veröffentlichte Versionen',
        'download_windows_installation'   => 'Installation',
        'download_windows_installation_1' => "Um Phalcon auf Windows zu nutzen, kannst Du eine DLL-Bibliothek herunterladen. Bearbeite Deine php.ini, füge diese am Ende hinzu und starte den Server neu, um die Erweiterung zu laden. <a href=':1:'>Mehr</a>.",
        'download_windows_guides'         => 'Ähnliche Anleitungen',
        'download_windows_guides_xampp'   => 'XAMPP Installation',
        'download_windows_guides_wamp'    => 'WAMP Installation',
        'download_windows_alpha'          => 'Alpha- und Betaversionen',
        'download_source_code'            => "Quellcode:  <a href=':1:' target='_download' title='GitHub-Repository'>GitHub</a>",
        'download_source_code_switch'     => "Quellcode (bitte auf den benötigten Branch wechseln): <a href=':1:' target='_download' title='GitHub-Repository'>GitHub</a>",
        'download_no_alpha_beta'          => 'Derzeit sind keine Alpha-/Betaversionen verfügbar.',
        'download_windows_older'          => 'Ältere Versionen',

        'download_devtools_1'             => 'Diese Anwendungssammlung enthält nützliche Skripte, um ein Codegerüst zu generieren. Kernkomponenten Deiner Anwendung können mit einem einfachen Befehl erstellt werden - dies ermöglicht die einfache Entwicklung von Anwendungen mit Phalcon.',
        'download_devtools_docs'          => "Dokumentation: <a href=':1:'>Phalcon Entwicklerwerkzeuge</a>",
        'download_devtools_composer'      => 'Installation via Composer',
        'download_devtools_composer_1'    => 'Installiere Composer in einem beliebigen Verzeichnis:',
        'download_devtools_composer_2'    => 'composer.json wie folgt erstellen:',
        'download_devtools_composer_3'    => 'Führe den Composer-Installer aus:',
        'download_devtools_composer_4'    => 'Erstelle eine Verknüpfung zum phalcon.php-Skript:',
        'download_devtools_download'      => 'Du kannst ein universelles Paket für sämtliche Plattformen mit den Entwicklungswerkzeugen bei <a href=":1:">GitHub</a> herunterladen.',

        'download_vagrant'                => 'Vagrant',
        'download_vagrant_boxes'          => 'Vagrant-Container',
        'download_vagrant_1'              => "<a href=':1:'>Vagrant</a> ist ein hervorragendes Werkzeug um leichte, reproduzierbare und portable Entwicklungsumgebungen zu erstellen und zu konfigurieren.",
        'download_vagrant_2'              => "Nutze einen der folgenden Container um Phalcon auf einer vorkonfigurierten Umgebung zu testen oder um etwas zu entwickeln.",
        'download_box_1'                  => "Container #1",
        'download_box_2'                  => "Container #2",
        'download_box_user_pass'          => "MySQL Benutzer: :1: Passwort: :2:",
        'download_box_doc_root'           => "HTTP-Root: :1:",
        'download_examples'               => "Vorinstallierte Beispiele",
        'download_examples_1'             => "Die folgenden Beispiele sind auf allen Vagrant-Containern vorinstalliert:",

        'consulting_header'               => "Wir haben eine Partnerschaft mit <a href=':1:'>LEZGRO</a>, einer Firma die darauf spezialisiert ist Web- und Mobile-Anwendungen zu schaffen. LEZGRO hat viel Erfahrung mit der Entwicklung Phalcon basierter Anwendungen.",
        'consulting_lezgro_1'             => "<a href=':1:'>LEZGRO</a> gratuliert Dir zu Deiner Entscheidung, Phalcon in denen Technologie-Stack aufzunehmen!",
        'consulting_lezgro_2'             => "Seit unsere Firma 2003 das Licht der Welt erblickte, haben wir viele Technologien und Ansätze der Softwareentwicklung ausprobiert.",
        'consulting_lezgro_3'             => "Produktmanager, CTOs, und technikferne Gründer ziehen <a href=':1:'>LEZGRO</a> heran um herausragende Produkte zügig und mit hoher Qualität zu erschaffen.",
        'consulting_lezgro_4'             => "Da wir nun positive Erfahrungen mit Phalcon sammeln konnten, können wir Dir dazu raten mit Phalcon zu arbeiten und deinem Phalcon basierten Produkt zur Marktreife verhelfen.",
        'consulting_lezgro_5'             => "Nimm Kontakt zu LEZGRO über ihre <a href=':1:'>Webseite</a> auf, auf der du auch Beispiele und Erfahrungsberichte zu ihrer Arbeit sehen kannst.",

        'consulting_mctekk_header'        => 'MCTekK has already delivered various high end Phalcon projects, with their main strengths being web and mobile development.',
        'consulting_mctekk_1'             => 'MCTekK jumped on the Phalcon wagon since day one. From its conception we saw the great advantages that Phalcon was offering and could offer in the future.',
        'consulting_mctekk_2'             => 'We have ample experience with Phalcon and have developed a myriad of project with it as the core. We are here to advise you on anything you need concerning Phalcon to help you improve your readiness, quickness and quality.',
        'consulting_mctekk_3'             => 'Contact us thourgh our <a href=":1:">website</a>, where you can take a look at the projects we have been involved in.',

        'requirements_analysis_1'         => 'Eines der größten Probleme von Entwicklern bei der Realisierung von Projekten sind fehlende und nicht ausreichend definierte Anforderungen. Die Diskrepanz zwischen der Erwartung des Kunden und dem Ziel des Entwicklers ist häufig groß.',
        'requirements_analysis_2'         => 'Wir bieten Dir einen Dienst zur Analyse des Bedarfs, diskutieren mit den Kunden und übersetzen deren Vision in genaue Spezifikationen für Entwickler.',
        'implementation_1'                => 'Wenn Du uns mit der Entwicklung Ihrer Anwendung betrauen möchtest, werden wir dies gerne tun. Durch Nutzung aktuellster Technik bieten wir robuste Lösungen für Deine Aufgaben oder Projekte an. Neben der reinen Entwicklung vervollständigen wir diese mit Tests und Dokumentation.',
        'ongoing_support_1'               => 'Kunden mit Interesse an einem längerfristigen Wartungsvertrag bieten wir Unterstützung für komplette Projekte. Kunden können Support auf Stundenbasis (mindestens 2 Stunden) für 50 USD je Stunde erwerben.',
        'ongoing_support_2'               => 'Support-Stunden verfallen nicht und können später genutzt werden. Kunden mit Bedarf an einem laufendem Support-Schema bieten wir flexible und an die Anforderungen angepasste Konditionen an.',
        'sponsors'                        => 'Sponsoren',
        'sponsors_1'                      => 'Denjenigen, welche unsere Arbeit und die weitere Entwicklung von Phalcon unterstützen möchten, bieten wir verschiedene Partnerschaften an, welche zu jedem Budget passen.',
        'sponsors_2'                      => 'Manchmal wünschen Kunden die Implementierung von bestimmten Funktionen, welche normalerweise durch ihre hohe Komplexität oder einen hohen Umfang mehr Zeit benötigen würden. Wir können derartige Anfragen zu unseren normalen Tarifen bearbeiten.',
        'contact'                         => 'Kontakt',
        'contact_1'                       => "Du kannst uns gerne <a href=':1:'>kontaktieren</a> um Deine Anforderungen zu besprechen, damit wir eine Lösung anbieten können die auf Deine Bedürfnisse und Dein Budget zugeschnitten ist. Kein Projekt ist zu groß oder zu klein.",

        'phalcon_team'                    => 'Das Phalcon-Team',
        'team_andres_1'                   => 'Andres ist kein Open-Source-Neuling. In den letzten neun Jahren hat er verschiedene Frameworks für PHP entwickelt und veröffentlicht. Zudem ist er mit der Entwicklung von Webanwendungen vertraut - seiner Hauptleidenschaft.',
        'team_andres_2'                   => "Als TR35-Gewinner versucht Andres mit der richtigen Wahl und Implementation oder dem richtigen Werkzeug einen Auftrag mit Fokus auf Durchsatz auszuführen. Um dies zu erreichen entwickelte er 2011 die Idee eine neue Art von Framework für PHP-Entwickler zu entwerfen, welches auf Benutzerfreundlichkeit, Funktionsreichtum und insbesondere Geschwindigkeit ausgelegt ist.",
        'team_andres_3'                   => 'Durch diesen neuen innovativen Ansatz wurde Phalcon geboren. Ein PHP-Framework, in C geschrieben, welches zahlreiche Funktionen für Entwickler bietet und trotzdem maximale Geschwindigkeit und minimalen Ressourcenverbrauch vereint.',
        'team_andres_4'                   => 'Andres ist einer der Kernentwickler von Phalcon und die Inspirationsquelle des Projektes.',
        'team_nikos_1'                    => 'Nikos arbeitet seit mehr als 20 Jahren in der IT-Industrie. Im Jahr 2000 wurde er Teil der PHP-Welt und nutzt die Sprache seitdem für persönliche Projekte und Projekte seiner Arbeitgeber.',
        'team_nikos_2'                    => 'Er liebt es, neue Technologien und Wege zu entdecken, welche eine Integration mit bestehenden Anwendungen ermöglichen. Dies führt zur Maximierung von Vorteilen sämtlicher beteiligten Projekte.',
        'team_nikos_3'                    => 'Er ist ein begeisterter Unterstützer von Test Driven Development (TDD) und versucht immer, seinen Programmcode vollständig abzudecken.',
        'team_nikos_4'                    => "Nikos bestehendes Interesse an neuen und innovativen Technologien abseits der bestehenden Wege führte ihn zu Phalcon. Er trat dem Kernteam bei und seine Aufgaben betreffen vor allem die Koordinierung von NFRs, Fehlerberichten, Hilfe mit Tests, Dokumentation und dem Incubator. Nikos ist zudem für die Bereitstellung der Windows DLLs des Projektes zuständig und bietet - wann immer dies möglich ist - Hilfe und Support.",
        'team_nikolay_1'                  => 'Nikolay entwickelt seit mehr als 10 Jahren Webanwendungen. Er ist sowohl mit hochperformanten, als auch komplexen Websites und Designs vertraut.',
        'team_nikolay_2'                  => 'Nikolay arbeitet bereits seit langem mit Open-Source-Projekten und nutzt diese immer, wenn die Anforderungen dies zulassen. Auf diese Art und Weise verbringt er einen großen Teil seiner Freizeit mit der Community, um einen Beitrag zur Entwicklung der Anwendungsarchitektur und der Geschwindigkeit beizusteuern. Er half insbesondere bei der Verbesserung von Open-Source CMS-Systemen, bei welchen er viel positives Feedback von der Community erhielt.',
        'team_nikolay_3'                  => 'Seine große Erfahrung mit Open-Source Projekten half ihm, sein technischen Wissen zur verbessern und dies der Gemeinschaft zur Verfügung zu stellen. ',
        'team_nikolay_4'                  => 'Nikolay ist ein begeisterter Unterstützer von maximaler Performance bei Webanwendungen. Nachdem er Phalcon kennen lernte, beschloss er diese Ideen weiter zu verfolgen und wurde ein Evangelist des Projektes. Er betreut die russische Community und bietet Ressourcen für russisch-sprechende Entwickler.',
        'team_nikolay_5'                  => "Seine Beiträge: ein Mirror der Hauptwebsite in Russisch (<a href=':1:'>http://www.Phalcon.ru</a>), ein Mirror der Dokumentation auf Russisch (<a href=':2:'>http://docs.Phalcon.ru</a>), Verbesserung der englischen Dokumentation sowie die Betreuung einer Gruppe im sozialen Netzwerk Vkontakte (<a href=':3:'>http://vk.com/Phalcon</a>).",

        'get_involved'                    => 'Mitmachen',
        'about_description_1'             => "Großartige Projekte benötigen großartige Helfer. Wir mögen dich noch nicht kennen, aber wir wissen, dass du der Richtige bist. Gemeinsam können wir die Welt verändern! Hier bei Phalcon entwickeln wir die nächste Framework-Generation für PHP und wir möchten dir beeindruckende Geschwindigkeit bieten, während wir die Entwicklung zu einem einfachen und entspannten Erlebnis machen.",
        'about_description_2'             => "Wir hoffen dir gefällt Phalcon so sehr wie uns. Wir begrüßen jede Mitarbeit und Unterstützung! <strong>Du musst kein C-Entwickler sein um Phalcon zu unterstützen!</strong> Es gibt viele Bereiche, in denen Du uns unterstützen kannst:",
        'about_translations_1'            => "Wir versuchen so viele Entwickler wie möglich zu erreichen und sämtliche Sprachbarrieren einzureissen. Dies erreichen wir durch die Nutzung von <a href=':1:'>:2:</a>, welches die Verwaltung von sämtlichen Wörtern oder Sätzen erlaubt, welche auf dieser Website übersetzt werden müssen. Das aktuelle Projekt-Repository findet sich <a href=':3:'>hier</a> und unten siehst Du den Fortschritt der Übersetzungsbemühungen.",
        'documentation_upper'             => 'DOKUMENTATION',
        'about_documentation_1'           => "Das Repository dieser Webseite findest Du auf <a href=':1:'>github</a>. Wir nutzen <a href=':2:'>readthedocs</a> für unsere Dokumentation.<br /><br />Wir freuen uns über Korrekturen, Erweiterungen und Verbesserungen unserer Dokumentation. Alles was Du tun musst ist unser Repository zu klonen und einen Pull-Request zu erstellen.<br /><br />Wenn du einige unserer Inhalt in andere Sprachen übersetzen kannst um anderen Entwicklern zu helfen, wäre das ganz toll!",
        'screencasts'                     => 'Screencasts',
        'about_screencasts_1'             => "Jeder liebt Screencasts. Wenn Du etwas Zeit hast und die Community mit lehrreichen Videos unterstützen möchtest, freuen wir uns sehr. Sieh Dir unseren <a href=':1:'>Vimeo-Kanal</a> zum Einstieg an.",
        'tests'                           => 'Tests',
        'about_tests_1'                   => "Keine Software ist fehlerfrei. Wenn Du einen Fehler findest, zögere nicht uns diesen mitzuteilen. Wir verfügen über mehr als <a href=':1:'>8000</a> automatisierte Test. Unit-Tests sind jedoch nicht ausreichend. Hilf uns bei der Erweiterung der Sammlung an Tests oder verbessere die bestehenden Tests. Jeder hinzugefügte Test macht das Framework stabiler.",

        'about_sample_apps_1'             => 'Große Beispiele helfen beim Verständnis der vielen Möglichkeiten des Phalcon-Frameworks. Teile Deine Repositories, denn Beispielanwendungen helfen anderen bei Ihrer Arbeit und unterstützen Dich zudem mit Feedback über Deine eigene Arbeit!',
        'evangelism'                      => 'Missionierung',
        'about_evangelism_1'              => "Viele Leute wissen noch nicht, dass Phalcon existiert oder dass es wirklich funktioniert. Wir sind sicher, dass viele Entwickler von Phalcon profitieren würden, wenn Sie es kennen würden. Wenn Du ein PHP Event/Meeting kennst und gerne über das Projekt sprechen würdest, hast Du unsere volle Unterstützung. Wer möchte nicht das Werkzeug kennenlernen, welches die PHP-Entwicklung revolutionieren wird?",
        'share_your_experiences'          => 'Teile deine Erfahrungen',
        'about_share_experiences_1'       => "Sei nicht schüchtern, Deine Erfahrungen mit Phalcon oder einzelnen Komponenten zu teilen. Obwohl nicht alle Anfragen sofort implementiert werden können, hilft uns Dein Feedback bei der Entwicklung von neuen Funktionen, welche die Entwicklung des Projekts prägen können.",
        'about_blog_1'                    => "Wenn Du gerne Texte schreibst, möchten wir Dich darauf aufmerksam machen, dass wir auf <a href=':1:'>unserem Blog</a> gerne Tutorials von Dir veröffentlichen. Wenn Du selbst einen Blog betreibst, können wir Deine Artikel auf unseren Seiten bei sozialen Netzwerken verbreiten, damit diese eine maximale Sichtbarkeit erreichen. Falls Du in einer anderen Sprache als Englisch schreibst, teilen und übersetzten wir gerne Deine Artikel. Kennst Du andere PHP-bezogene Blogs, die das Projekt gerne ihren Lesern vorstellen würden?",
        'donations_sponsoring'            => 'Spenden / Sponsoring',
        'about_sponsoring_1'              => "Wir sind ein kleines aber effektives Entwicklerteam. Wir versuchen, so viel Zeit wie möglich mit dem Projekt zu verbringen. Unsere Leidenschaft für das Projekt verbessert dieses konstant. Phalcon ist Open-Source-Software und freiwillige Beiträge sind für die weitere Entwicklung erforderlich. Sie können die Entwicklung aktiv durch Spenden an das Projekt oder Entwickler unterstützen. Mehr Zeit und Ressourcen für das Projekt beudeutet mehr Aktivität, mehr Verbesserung, mehr Untersützung und mehr nützliche Features.",
        'social_networks'                 => 'Soziale Netzwerke',
        'about_social_networks_1'         => "Phalcon entwickelt sich durch unsere Verbesserungswünsche täglich weiter. Soziale Netzwerke sind Teil unseres heutigen Lebens und jeder interagiert mit anderen durch diese. Teile Deine Phalcon-Erlebnisse mit Deinen sozialen Kreisen und verbreite das Projekt. Zunehmend mehr Menschen beteiligen sich an unserer Gemeinschaft und machen sie dadurch kraftvoller, facettenreicher und populärer. Like, '+1' oder teile Beiträge, welche wir regelmäßig durch verschiedenen sozialen Netzwerke verbreiten. Die Leute, welche Phalcon durch Dich entdecken, werden es Dir danken!",
        'about_social_networks_2'         => "Wir sind in den populäreren sozialen Netzwerken vertreten. Wenn Du uns folgst, hilfst Du uns dabei, die Verbreitung und Sichtbarkeit des Projektes zu erhöhen.",
        'follow_on_twitter'               => 'Folge uns bei Twitter',
        'facebook_page'                   => 'Facebook-Seite',
        'google_plus_page'                => 'Google+-Seite',
        'official_blog'                   => 'Offizieller Blog',
        'star_on_github'                  => 'Einen Github Stern vergeben',
        'thank_you'                       => 'Vielen Dank!',
        'about_thank_you_1'               => 'Wir danken allen Helfern und Mitgliedern der Gemeinschaft, welche Phalcon zum besten Framework seiner Art machen. Euer Engagment motiviert uns jeden Tag. Wir danken für euer Vertrauen in Phalcon.',
        'flying_with_phalcon'             => 'Vielen Dank dass Du mit Phalcon geflogen bist! &lt;3',

        'hosting_description'             => 'Phalcon kann auf jedem Computer installiert werden, sofern ein SSH Root (oder sudo) Zugriff vorhanden ist. Unten findest Du eine Reihe von Firmen, welche dies anbieten:',
        'hosting_fortrabbit_title'        => 'Fortrabbit',
        'hosting_fortrabbit_1'            => 'Fortrabbit bietet verschiedene Hostingprodukte an, welche die Wünsche von Entwicklern für nahezu sämtliche Anwendungsfälle befriedigen sollten.',
        'hosting_fortrabbit_2'            => "Fortrabbit bietet eine große Zahl <a href=':1:'>Erweiterungen</a> an, welche auch die Bedürfnisse von anspruchsvollen Projekten befriedigen.",
        'hosting_fortrabbit_3'            => 'Stabile Versionen von Phalcon sind vorinstalliert, Du kannst diese einfach von dem Administrations-Dashboard aus aktivieren.',
        'hosting_webfaction_title'        => 'WebFaction',
        'hosting_webfaction_1'            => 'WebFaction Hosting für Entwickler. Shell Zugang und schnelle Server auf denen sämtliche Werkzeuge vorinstalliert und gewartet werden.',
        'hosting_webfaction_2'            => "Um Phalcon bei WebFaction zu installieren, befolge folgende <a href=':1:'>Instruktionen</a>.",
        'hosting_amazon_ec2_title'        => 'Amazon EC2',
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud bietet eine skalierbare Lösung bei der nur die tatsächlich genutzten Ressourcen bezahlt werden.',
        'hosting_amazon_ec2_2'            => "Wähle eine vorkonfigurierte Vorlage eines Amazon Machine Images (AMI), um sofort durchzustarten. Alternativ kannst Du ein AMI mit Deinen Anwendungen, Bibliotheken, Daten und sonstigen Einstellungen erstellen. <a href=':1:'>Mehr...</a>",
        'hosting_linode_title'            => "Linode",
        'hosting_linode_1'                => "Setze virtuelle Linux-Server in der Linode-Cloud ein. Innerhalb von wenigen Sekunden lässt sich ein Server mit einer Distribution Deiner Wahl, ausgewählten Ressourcen, an ausgewählten Standorten aufsetzen. <a href=':1:'>Weitere Informationen</a>",
        'hosting_digital_ocean_title'     => 'Digital Ocean',
        'hosting_digital_ocean_1'         => "Verdammt schnelle Cloud-Technologie für Entwickler. Erstelle einen SSD-Cloudserver in 55 Sekunden. <a href=':1:'>Mehr</a>",
        'hosting_digital_ocean_2'         => "<p>Folge diesem <a href=':1:'>Tutorial</a> um loszulegen</p>",
        'hosting_rackspace_title'         => "Rackspace",
        'hosting_rackspace_1'             => "Cloud-Server sind virtuelle Maschinen mit Linux oder Windows&reg; Server in der Rackspace-Cloud. Ressourcen wie CPU, RAM und Speicherplatz können abhängig von den Bedürfnissen angepasst werden. Du zahlst nur für die Ressourcen, die Du benötigst. <a href=':1:'>Mehr erfahren...</a>",
        'hosting_install_instructions'    => 'Installiere Phalcon mithilfe der Standardanleitung.',
        'hosting_azure_title'             => "Windows Azure",
        'hosting_azure_1'                 => "Die <a href=':1:'>Windows Azure Cloud</a> bietet Dir hochskalierbares und verwaltbares Windows-Hosting für Deine Webanwendungen. Benutze Phalcon um Deine Kosten pro Instanz zu senken.",
        'hosting_azure_2'                 => "Um Phalcon zu installieren, folge der Schritt-für-Schritt-Anleitung <a href=':1:'>dieses SitePoint-Artikels</a>.",
        'hosting_aspnix_1'                => 'ASPnix bietet außergewöhnliches Windows Web Hosting. Unsere Kunden haben unseren Service herausragend bewertet. Wir bieten ökonomische Pakete für Shared Windows Web Hosting, Virtual Private Servers und Dedicated Servers!  <a href=":1:">Mehr...</a>',
        'hosting_aspnix_2'                => '<p>Phalcon wird auf allen Windows Shared Web Hosting Paketen unterstützt, es ist weder Installation noch Konfiguration nötig! Sie bieten eine Vielzahl von PHP Versionen von 5.2 – 5.6 sowie viele <a href=":1:" target="_blank">zusätzliche Erweiterungen</a>!</p>',
        'hosting_layershift_title'        => 'Layershift',
        'hosting_layershift_1'            => "Du machst den Code, wir machen die Server. Next generation, auto-sizing PaaS für PHP",
        'hosting_layershift_2'            => "<p>Folge diesem <a href=':1'>Tutorial</a> um loszulegen</p>",

        'testimonials'                    => 'Referenzen',
        'testimonials_description'        => "Anbei findest Du eine Sammlung von Berichten und Erfolgsgeschichten von euch, den Entwicklern und Nutzern von Phalcon PHP. Wir freuen uns immer über E-Mails mit Erfolgsgeschichten und veröffentlichen diese nach Möglichkeit in unserem Blog. Wenn Du uns Deine Geschichten senden oder in Kontakt treten möchtest, kannst du uns gern eine E-Mail schreiben - <a href='mailto::1:'>:2:</a>.",
        'testimonials_1'                  => "Greetings, Phalcon team! I have a project, built on Phalcon framework. It's a Guitarama (<a href=':1:'>:2:</a>) - guitars tabs and chords catalog. The site is aimed at the Russian audience, and uses the Russian language, but I hope, there will be no problem to understand most of pages. The site was re-launched on a new platform in the beginning of January, 2013 and has since shown steady growth. Current daily visits: ~1500 unique visitors, ~5000 page views. The site is running on an old physical server 1хP4-3Ghz, 4GB RAM. Once again, thank you for a great framework and all what you are doing :)  Michael.",
        'testimonials_2'                  => "Hello, Phalcon team. I would like to share with you our success story of using Phalcon in <a href=':1:'>:2:</a> and <a href=':3:'>:4:</a> projects, the most visited and highloaded sites in Kazakhstan, ranked in TOP-10 classified sites in the CIS. Both sites work on single RESTful-like API written on Phalcon\Mvc\Micro. On peak loads API processes something like 400 req/sec and this is not a limit. Moving to Phalcon allowed us to reduce response generation time and the consumption of CPU and RAM, as well as to reduce the time of development process. We will continue using Phalcon in our new projects. Thank you for the great work you are doing! Best regards, Nikita Vershinin, Lead Developer, Kolesa.kz and krisha.kz",
        'testimonials_3'                  => "Phalcon Team, The framework you guys have created is amazing. I've never used a framework that has combined speed, efficiency, brevity, and naturality all in one package. I intend on championing and contributing back to the project in any way that I can. I embarked recently on an ~800 hour project and am happy to say that we are using Phalcon Framework. Bravo. Brian Seymour",
        'testimonials_4'                  => "Hi guys, I just ran across Phalcon and it's just awesome! I've merely wanted to say to you how awesome you are! So, thanks for this framework and keep up the good work! Ivan Penchev",
        'testimonials_5'                  => "Hi Guys, i wrote simple url-shortener service with phalcon. That was amazing! really. <a href=':1:'>:2:</a>. Demo is here <a href=':3:'>:4:</a> :) Murat Küçükosman ",
        'testimonials_6'                  => "Hello Phalcon Team, I created a small project designed for Polish users using your framework. I have to admit that the performance is amazing, congratulations good job. Service to validate the content of the web pages in Polish language <a href=':1:'></a>:2:</a>",
        'testimonials_7'                  => "Hi guys! Just wanted to share with you the latest release of our old project - <a href=':1:'>:2:</a>. Switching to phalcon allowed us to halve the server load compared to the previous framework, which is great!",

        'support_note'                    => "Viele Fehler entstehen, weil Nutzer nicht die aktuellste Version benutzen. Bitte besuche :1:, lade die aktuellste verfügbare Version herunter (oder kompiliere diese) und prüfe, ob das beobachtete Fehlverhalten tatsächlich noch ein Fehler ist.",
        'support_download_page'           => "Download-Seite",
        'support_documentation_1'         => "Bitte nutze zuerst :1:. Du kannst zudem die Suchfunktion in unserer Dokumentation nutzen, um zu finden, was Du suchst. Falls Deine Frage noch immer nicht beantwortet wurde, findest Du im Folgenden weitere Möglichkeiten.",
        'support_phalcon_forum'           => "Phalcon Forum",
        'support_forum_1'                 => "Du kannst Fragen im <a href=':1:'>Forum</a> stellen",
        'support_irc'                     => "IRC-Kanal",
        'support_irc_1'                   => "Du findest uns im Raum :1: des Freenode-Netzwerkes.",
        'support_stack_overflow_1'        => "Wenn Du mit Stack Overflow vertraut bist, kannst Du den <a href=':1:'>phalcon</a>-Tag nutzen, um relevante Themen zu suchen oder Deine Anfrage zu taggen.",
        'support_please_note'             => "Bitte beachte:",
        'support_please_note_1'           => "Stack Overflow steht in keiner Verbindung zu Phalcon",
        'support_please_note_2'           => "Bitte veröffentliche Bugs mithilfe des <a href=':1:'>Issue Trackers</a> bei GitHub.",
        'support_please_note_3'           => "Bitte dort keine Feature-Requests erstellen, diese werden im <a href=':1:'>Issue Tracker</a> auf Github verwaltet",
        'support_please_note_4'           => "Stelle sicher, dass Du 'phalcon' als Tag in der Frage integrierst",
        'support_please_note_5'           => "Stelle sicher, dass Du 'Phalcon' in der Frage erwähnst",
        'support_reporting_a_bug'         => "Fehler melden",
        'support_reporting_a_bug_1'       => "Sollte keine der oben genannten Optionen funktioniert haben, bitte Bugs im <a href=':1:'>issue tracker</a> auf github melden.",

        'demo_video'                      => " &nbsp; Unsere Video-Demo: <span>Eine Online-Meinungsumfrage von Grund auf in &lt; 15 min.</span>",
        'built_with_phalcon' => 'Erstellt mit Phalcon',
        'installing_phalcon_php' => 'Phalcon PHP installieren',
        'tutorial' => 'Tutorial',
        'sample_applications' => 'Beispielanwendungen',
        'community' => 'Community',
        'designed_by' => 'Designed von:',
        'license_new_bsd' => "Phalcon ist ein open-source PHP framework <br />erstellt als C-Erweiterung. Es steht unter der sog. <br /><a href=\"http://opensource.org/licenses/BSD-3-Clause\" target=\"_blank\">new BSD License</a>.",
        'how_to_contribute'               => "Mithelfen",
        'get_phalcon'                     => 'Hol\' Dir Phalcon',
        'install_instructions'            => 'Installationsanleitung',
        'watch_the_demo'                  => 'Schau\' Dir die Demo an',
        'see_all_screencasts'             => 'Alle Screencasts findest du hier',
        'header_tagline'                  => 'Ein full-stack PHP framework als C basierte Erweiterung.',
        'see_for_youself'                 => 'Siehe selbst...',
        'header_slogan'                   => 'Seine überzeugende Architektur macht Phalcon zum schnellsten PHP Framework das es je gab!',
        'codesamples_header'              => 'Entdecke den Luxus integrierter Komponenten',
        'basic_fatures' => 'Basisfeatures',
        'low_overhead' => 'Kaum Overhead',
        'mvc' => 'MVC',
        'di' => 'DI',
        'dependency_injection' => 'Dependency Injection',
        'restful_services' => 'RESTful Services',
        'model_view_controller' => 'Model-View-Controller',
        'rest' => 'REST',
        'auto_loader' => 'Auto-loader',
        'router' => 'Router',
        'phql' => 'PHQL',
        'odm_for_mongo' => 'ODM für MongoDB',
        'transactions' => 'Transactions',
        'cache' => 'Cache',
        'memcache' => 'Memcache',
        'template_engines' => 'Template Engines',
        'volt' => 'Volt',
        'i18n' => 'i18n',
        'form_builder' => 'Forms Builder',
        'flash_messages' => 'Flash Messages',
        'ACL' => 'ACL',
        'sharding' => 'Sharding',
        'crypt' => 'Crypt',
        'queueing' => 'Queueing',
        'data_and_storage' => 'Data &amp; Storage',
        'view_and_frontend' => 'Views &amp; Frontend',
        'others' => 'Andere',
        'join_community' => 'Werde Teil unserer aktiven Entwicklercommunity!',
        'learn_to_fly' => 'Lerne fliegen mit Phalcon 2',
        'learn_to_fly_text' => 'Fang an indem du die grundlegenden Konzepte hinter einer gewöhnlichen Phalcon Anwendung kennenlernst',
        'meet_zephir' => 'Entdecke Zephir',
        'meet_zephir_text' => 'Lerne mehr über die Technologie hinter Phalcon',
        'visit_website' => 'Besuche die Webseite',
        'help_to_fly' => 'Hilf Phalcon dabei noch höher zu fliegen',
        'help_to_fly_text' => 'Zeige deine Anerkennung und hilf und die Projektkosten zu tragen indem du etwas spendest:',
        'try_tutorial' => 'Versuche Dich am Tutorial',
        'follow_along' => 'Folge uns:'
    );

    // return $messages;

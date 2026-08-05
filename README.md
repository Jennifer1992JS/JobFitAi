# 🚀 JobFit AI — Smart Job Application Assistant

**JobFit AI** ist eine moderne, webbasierte Anwendung zur automatisierten Analyse von Stellenanzeigen und Generierung maßgeschneiderter Anschreiben mithilfe von KI und n8n-Workflows.

![Design Preview](assets/jobfitai.png) *(Optional: Screenshot deines UIs)*

---

## ✨ Features

- 🎯 **Match-Analyse:** Vergleicht Anforderungsprofile von Stellenanzeigen direkt mit dem eigenen Lebenslauf/Profil.
- ✍️ **Automatisierte Anschreiben:** Erstellt präzise, auf die Stelle zugeschnittene Bewerbungsschreiben.
- 🔒 **Zero-Data Architecture:** Keine Datenbank-Speicherung. Übermittelte Daten werden flüchtig im n8n-Workflow verarbeitet und umgehend verworfen.
- 🎨 **Dark Glassmorphism UI:** Responsive, moderne Nutzeroberfläche mit Custom Design Tokens und Lucide Icons.
- ⚖️ **Rechtssicher:** Inklusive DSGVO-konformer Datenschutzerklärung & Impressum (§ 5 DDG).

---

## 🛠 Tech Stack

- **Frontend:** HTML5, CSS3 (Custom Variables, Glassmorphism), Vanilla JavaScript
- **Icons & Fonts:** Lucide Icons, *Plus Jakarta Sans* & *JetBrains Mono*
- **Backend / Automation:** Self-hosted n8n (Webhooks & Workflow Engine)
- **Deployment:** GitHub Pages / Netlify

---

## ⚙️ Funktionsweise / Architektur

```text
[ User Input (Formular) ]
          │
          ▼
   (HTTP POST Webhook)
          │
          ▼
    [ n8n Workflow ]  ────►  [ KI / LLM Processing ]
          │                          │
          ▼                          ▼
   (Flüchtige Verarbeitung)   (Match Score & Cover Letter)
          │                          │
          └───────────┬──────────────┘
                      │
                      ▼
        [ Output an Frontend Browser ]


Der Nutzer gibt die Stellenbeschreibung und eigene Daten im Frontend ein.

    Das Formular sendet die Anfrage per HTTPS-Post an einen n8n-Webhook.

    n8n verarbeitet die Prompt-Logik und gibt das Ergebnis in Echtzeit zurück.

    Nach der Antwort werden keine Nutzerdaten auf dem Server gespeichert.

🚀 Quickstart / Lokale Einrichtung

    Repository klonen:
    Bash

    git clone [https://github.com/dein-username/jobfit-ai.git](https://github.com/dein-username/jobfit-ai.git)
    cd jobfit-ai

    Dateien öffnen:
    Öffne die index.html direkt in deinem Browser oder nutze eine Live-Server-Erweiterung (z. B. VS Code Live Server).

    n8n Webhook anpassen:
    Trage in der index.html im <script>-Bereich die URL deines eigenen n8n-Webhooks ein.

📂 Projektstruktur
Plaintext

├── assets/
│   └── jobfitai.png       # Logo & Grafiken
├── index.html             # Hauptanwendung & Dashboard
├── impressum.html         # Impressum (§ 5 DDG)
├── datenschutz.html       # Datenschutzerklärung (DSGVO)
└── README.md              # Dokumentation

⚖️ Lizenz & Rechtliches

Dieses Projekt wurde als modernes Show-Projekt für Automatisierung und KI-Integration entwickelt.
Sämtliche rechtlichen Angaben sind in impressum.html und datenschutz.html hinterlegt.

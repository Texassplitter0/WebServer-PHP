# PHP-Server Projekt: Dönerhub-Website

## Projektbeschreibung
Dieses Projekt ist eine Webanwendung namens "Dönerhub-Website", die mithilfe von Docker bereitgestellt wird. Sie umfasst ein Backend in Node.js, ein Frontend mit HTML/CSS sowie ein einfaches PHP-Login-System. Die Anwendung dient als Community-Portal mit verschiedenen Funktionen wie Login, Registrierung und benutzerdefinierten Seiten.

## Projektstruktur
- **Docker-Konfiguration**:
  - `docker-compose.yml`: Definiert die Container-Setups.
  - `Dockerfile`: Anweisungen zum Erstellen des Images.
  
- **Backend**:
  - `server.js`, `app.js`: Hauptlogik des Backends.
  - `models/`: Datenmodelle (z. B. `userModel.js`).
  - `routes/`: API-Endpunkte (z. B. `userRoutes.js`).
  - `utils/db.js`: Datenbankverbindung.

- **Frontend**:
  - HTML-Dateien wie `index.html`, `login.html`.
  - CSS-Datei `styles.css` für das Styling.
  - Bilder im Ordner `images/`.

- **PHP-Login-System**:
  - `db.php`: Datenbankverbindung.
  - `login.php`, `register.php`: Authentifizierungslogik.

- **Datenbank**:
  - `init.sql`: Initialisierung der Datenbank.
  - `my.cnf`: MySQL-Konfiguration.

## Installation
1. **Voraussetzungen**:
   - Docker und Docker-Compose installiert.
   - Node.js und npm (optional für lokale Entwicklung).

2. **Projekt starten**:
   ```bash
   docker-compose up --build
   ```
   Dies startet die Container für das Backend, das Frontend und die Datenbank.

3. **Manuelle Installation (optional)**:
   - Backend-Abhängigkeiten installieren:
     ```bash
     cd backend
     npm install
     ```
   - Server starten:
     ```bash
     npm start
     ```

## Nutzung
- **Frontend**:
  - Zugriff über `http://localhost:8080`.

- **Login und Registrierung**:
  - Die Login- und Registrierungsseiten sind unter `php-login-system/` verfügbar.

- **API**:
  - Beispielsweise `http://localhost:3000/api/users` für Benutzerendpunkte.

## Systemanforderungen
- Docker: Version 20.x oder höher
- Node.js: Version 16.x oder höher
- MySQL: Version 8.x

## Datenbank
- Die Datenbank wird mit der Datei `init.sql` initialisiert.
- Konfigurationen sind in `my.cnf` enthalten.

## Lizenz
Dieses Projekt steht unter der MIT-Lizenz. Weitere Informationen finden Sie in der Datei `LICENSE` (falls vorhanden).

## Autoren
- **Max Mustermann** (Entwickler)
- **Lisa Musterfrau** (Design)


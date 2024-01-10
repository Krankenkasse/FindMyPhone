## Beschreibung
This is a small PHP/HTML page that sends a Pushover notification to your Cellphone.
That way you can find it very easy with any device that can enter the web.
But you need a Pushover account and the app installed on your Phone.

### Config 
Replace sample.config.ini with config.ini

```ini
token = "Pushover API token"
user = "Pushover user key"
devices[] = "Device name 1"
devices[] = "Device name 2"
ownSoundFiles[] = "Pushover sound file name 1"
```

## Tech Stack

**Client:** Pushover, Webbrowser

**Server:** Webserver with PHP

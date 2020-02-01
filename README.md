
# SCP:SL Status Page

This status page designed for the game [SCP:SL](https://scpslgame.com) is a modified version of [Cachet](https://github.com/CachetHQ/Cachet), an open-source status page system. It has a few tweaks in the internal CSS and JS to give it that SCP flare. 

It also includes a [package](https://github.com/Axiacore/cachet-uptime-robot) by Axiacore called cachet-uptime-robot that will automatically update the status on the page according to live-data from [UptimeRobot](https://uptimerobot.com)

## Requirements

- PHP 7.1.3 – 7.3
- HTTP server with PHP support (e.g.: Apache, Nginx, Caddy)
- [Composer](https://getcomposer.org)
- A supported database: MySQL, PostgreSQL or SQLite
- Python 3.6+ for the updater script

## Installation

You can find installation documentation for Cachet [here](https://docs.cachethq.io/docs/installing-cachet). When it says to git clone Cachet, please clone this repository instead. 

## Configuration

### Dashboard Config
You will need to set the main logo for the site in the admin control panel, the logo used in my demo site can be found in the /logo/ folder.

Once you have determined your required monitors, add them as components in the dashboard and record their component ID's for use in the updater script. You can find the ID listed for the component in your browsers address bar.

### Updater Script Config


To get started, you have to specify your Cachet and UptimeRobot settings and in **/uptimerobot-cron/config.ini**.
```ini
[uptimeRobot] // Global uptimerobot API
UptimeRobotMainApiKey = your-api-key

[cachet] // Global cachet status API
CachetApiKey = cachet-api-key
CachetUrl = https://status.mycompany.com

[uptimeRobotMonitorID1] // This will update ComponentId 1 on the global Cachet
ComponentId = 1

[uptimeRobotMonitorID2] // This will update ComponentId 2 on the global Cachet
ComponentId = 2
```

* `UptimeRobotMainApiKey`: UptimeRobot API key.
* `uptimeRobotMonitorID`: This exact "monitor" id set in UptimeRobot. You can find the id's by running `python update_status.py config.ini --printIds`
* `CachetApiKey`:  Cachet API key.
* `CachetUrl`: URL of the API of the status page you want to show the site availability in.
* `ComponentId`: Id of the component you want to update on each check.


### Command and args
`update_status.py <config> [--printIds]`  
`config` is mandantory and must point to the path where a config file can be found.  
`--printIds` will print a list with all monitors in UptimeRobot with there name and ID. This ID needed in the config.ini file.

You can always do `update_status.py -h` for more info.

### Updater script cronjob
Register a cron that runs `update_status.py` every 5 minutes.
```bash
# Open cron file to edit.
crontab -e
```

Edit the crontab file and add this line:
```bash
*/5 * * * * ~/uptimerobot-cron/run.sh
```

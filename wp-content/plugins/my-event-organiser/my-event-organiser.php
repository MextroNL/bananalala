<?php
/**
 * Plugin Name: My event organisator plugin
 * Plugin URI: localhost/bananalala
 * Description: This plugin will help organising an event on your website
 * Author: Max den Ouden
 * Author URI: www.mextro.nl
 * Version: 0.0.1
 * Text Domain: my-event-organiser
 * Domain Path: languages
 *
 * This is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with your plugin. If not, see <http://www.gnu.org/licenses/>.
 */
// Define the plugin name:
define ( 'MY_EVENT_ORGANISER_PLUGIN', __FILE__ );

// Include the general definition file:
require_once plugin_dir_path( __FILE__ ) . 'includes/defs.php';

class MyEventOrganiser {
    public function __construct() {
    }
}
// Instantiate the class
$event_organiser = new MyEventOrganiser();

?>
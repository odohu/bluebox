<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * @package    Core/Libraries/Package
 * @author     K Anderson <bitbashing@gmail.com>
 * @license    Mozilla Public License (MPL)
 */
abstract class Package_Configure
{
    /**
     * Version of this module. Use any php version string
     * see http://php.net/manual/en/function.version-compare.php
     * @var mixed
     */
    public static $version = 0.0;

    /**
     * The display name of this module
     * @var string
     */
    public static $displayName = NULL;

    /**
     * The string to display as the name of the author(s)
     * @var string
     */
    public static $author = 'Unspecified';

    /**
     * The string to display as the name organization
     * @var string
     */
    public static $vendor = 'Unspecified';

    /**
     * The string to display as the type of license
     * @var string
     */
    public static $license = 'MPL';

    /**
     * A breif description of the module, should to be under 150 charaters
     * Used in module listings to brief the user to the purpose of the module
     * @var string
     */
    public static $summary = 'This is a generic package.';

    /**
     * The full description of the module, used to provide users with more details
     * @var string
     */
    public static $description = '';

    /**
     * The default enabled value, if true it will attempt to install by default
     * @var bool
     */
    public static $default = FALSE;

    /**
     * If true this module can not be uninstalled
     * @var bool
     */
    public static $denyRemoval = FALSE;

    /**
     * This is a list of catagories constants as defined in Core_PackageManager
     * @var string
     */
    public static $type = Package_Manager::TYPE_DEFAULT;

    /**
     * This variable is useful for making sure the user has other modules installed that may be required
     * @var array Key/value pair of modules and dependencies
     */
    public static $required = array();

    /**
     *
     * @var string
     */
    public static $navBranch = '/';

    /**
     *
     * @var string
     */
    public static $navURL = NULL;

    /**
     *
     * @var string
     */
    public static $navLabel = NULL;

    /**
     *
     * @var string
     */
    public static $navSummary = NULL;

    /**
     * This is an array optionally defining a submenu
     * @var array
     */
    public static $navSubmenu = array();

    /**
     * The constuctor for this class ensures that the modules manditory defaults are fulfilled
     * @return void
     */
    public function __construct()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    /*************************
    * INSTALLATION ROUTINES *
    *************************/
    /**
     * Do any pre-installation preparation.
     *
     * Things like making a temp directory or downloading stuff you might need.
     * All modules have their preInstall() methods run first, before install() runs, so if you may need to setup
     * something another module's install method depends on, do it here.
     *
     * You do not need to override this class if you are not adding additional functionality to it.
     *
     * @return array | NULL Array of failures, or NULL if everything is OK
     */
    public function preInstall()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    /**
     * Do the actual installation.
     *
     * Make sure you rollback any changes if your install fails (using uninstall())!
     *
     * By default, the install routine just installs your models. If that's all you need for your install,
     * you don't need to override this function. All models in the directory of your module will be installed.
     *
     * You do not need to override this class if you are not adding additional functionality to it.
     *
     * @return array | NULL Array of failures, or NULL if everything is OK
     */
    public function install($package = NULL)
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    /**
     * Post-install routine for this module.
     *
     * Do any post-installation configuration that should happen after ALL modules have installed.
     *
     * You do not need to override this class if you are not adding additional functionality to it.
     *
     * @return array | NULL Array of failures, or NULL if everything is OK
     */
    public function postInstall()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    /**
     * Finalize-install routine for this module.
     *
     * Do any post-installation configuration that should happen after ALL modules have installed and the models commited to the db.
     * This is the safest place to do things that may depend on other modules.
     *
     * You do not need to override this class if you are not adding additional functionality to it.
     *
     * @return array | NULL Array of failures, or NULL if everything is OK
     */
    public function finalizeInstall()
    {
        $this->noMethodMethod(__FUNCTION__);
    }
    /**********************
    * MIGRATION ROUTINES *
    **********************/
    /**
     * Do any pre-migration preparation.
     *
     * Things like making a temp directory or downloading stuff you might need.
     * All modules have their preMigrate() methods run first, before mirgrate() runs, so if you may need to setup
     * something another module's install method depends on, do it here.
     *
     * You do not need to override this class if you are not adding additional functionality to it.
     *
     * @return array | NULL Array of failures, or NULL if everything is OK
     */
    public function preMigrate()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    /**
     * Perform a migration of this module.
     *
     * Make sure you rollback any changes if your migration fails!
     *
     * By default, the migrate routine just runs the migrations in Doctrine for your models, based on the version of
     * this module and the version registered in the database.
     * If that's all you need for your migrations, you don't need to override this function.
     * All models in the directory of your module will be migrated.
     *
     * You do not need to override this class if you are not adding additional functionality to it.
     *
     * @return array | NULL Array of failures, or NULL if everything is OK
     */
    public function migrate()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    /**
     * Post-migration routine for this module.
     *
     * Do any post-migration configuration that should happen after ALL modules have migrated.
     * This is the safest place to do things that may depend on other modules.
     *
     * You do not need to override this class if you are not adding additional functionality to it.
     *
     * @return array | NULL Array of failures, or NULL if everything is OK
     */
    public function postMigrate()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    /**********************
    * UNINSTALL ROUTINES *
    **********************/
    public function preUninstall()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    /**
     * Removes your module.
     *
     * This method MUST WORK as a last-resort rollback method on a botched install.
     *
     * By default, Core_PackageManager will remove any models associated with this module and then remove all files
     * in the module's directory. It will also remove the module entry from the Modules and ModuleUser tables.
     *
     * You do not need to override this class if you are not adding additional functionality to it.
     *
     * @return array | NULL Array of failures, or NULL if everything is OK
     */
    public function uninstall($package = NULL)
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    public function postUninstall()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    /************************
    * MAINTENANCE ROUTINES *
    ************************/
    /**
     * Preform any possible automatic repairs
     *
     * By default this will update the package datastore, and numbertype tables.
     *
     * You do not need to override this class if you are not adding additional functionality to it.
     *
     * @return array | NULL Array of failures, or NULL if everything is OK
     */
    public function repair()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    /**
     * Verify module is intact.
     *
     * Verify that this module has all it's parts and nothing looks out of whack.
     * This gets called by install, upgrade, downgrade, repair and sanityCheck.
     *
     * You do not need to override this class if you are not adding additional functionality to it.
     *
     * @return array | NULL Array of failures, or NULL if everything is OK
     */
    public function verify()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    public function sanityCheck()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    public function completedInstall()
    {
        $this->noMethodMethod(__FUNCTION__);
    }

    private function noMethodMethod($method)
    {
        $class = str_replace('_Configure', '', get_class($this));

        Package_Message::log('debug', "$class doesn't have a $method method");
    }
}
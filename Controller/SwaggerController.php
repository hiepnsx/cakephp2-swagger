<?php

App::import('Vendor', ['file' => 'autoload']);

class SwaggerController extends Controller
{

    /**
     * @var array that will hold merged configuration settings.
     */
    protected $config = [];

    /**
     * @var array that will hold merged options settings.
     */
    protected $options = [];

    /**
     * @var array holding required default configuration settings.
     */
    public static $defaultConfig = [
        'ui' => [
            'title' => 'CakePHP Swagger plugin'
        ],
        'scan_directory' => [
            APP . "Controller"
        ]
    ];


    public function beforeFilter()
    {
        parent::beforeFilter();
        if (Configure::check('Swagger')) {
            $this->config = Hash::merge(static::$defaultConfig, Configure::read('Swagger'));
        }
        if (array_key_exists('analyser', $this->config)) {
            $this->options['analyser'] = $this->config['analyser'];
        }
        if (array_key_exists('analysis', $this->config)) {
            $this->options['analysis'] = $this->config['analysis'];
        }
        if (array_key_exists('processors', $this->config)) {
            $this->options['processors'] = $this->config['processors'];
        }
        if (array_key_exists('exclude', $this->config)) {
            $this->options['exclude'] = $this->config['exclude'];
        }
    }

    public function json()
    {
        $this->response->type('json');
        $this->autoRender = false;
        return json_encode(\Swagger\scan($this->config['scan_directory'], $this->options));

    }

    public function specs()
    {
        if (array_key_exists('scan_directory', $this->config) && empty($this->config['scan_directory'])) {
            return;
        }

        $swaggerJsonUrl = Router::url([
            'plugin' => 'CakePHP2Swagger',
            'controller' => 'Swagger',
            'action' => 'json'
        ], true);

        $this->set(compact('swaggerJsonUrl'));
    }
}

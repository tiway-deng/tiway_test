<?php
/**
 * Created by PhpStorm.
 * User: HASEE
 * Date: 2019-08-17
 * Time: 16:59
 */
namespace Tiway\Ecommerce;

use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;

class Ecommerce
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;

    /**
     * Ecommerce constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public function test_rtn($msg = ''){
        $config_arr = $this->config->get('packagetest.options');
        return $msg.' <strong>from your custom develop package!</strong>>';
    }
}
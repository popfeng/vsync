<?PHP   
/**
 * Vs_Config
 * app配置信息
 *
 * @author popfeng <popfeng@yeah.net>
 */
class Vs_Config extends Su_Config
{ 
    /**
     * app configure
     */
	protected function __construct()
	{
        /**
         * Tencent
         */
        $conf['tencent']['account'] = 'popfeng'; // 我的腾讯微博账号
        $conf['tencent']['app_key'] = ''; // 应用授权 app key
        $conf['tencent']['app_secret'] = ''; // 应用授权 app secret
        $conf['tencent']['api'] = 'https://open.t.qq.com/api/'; // 接口url
        $conf['tencent']['expire_time'] = 7; // accesstoken有效期,初级7天

        /**
         * Sina
         */
        $conf['sina']['account'] = '熊者孙'; // 我的新浪微博账号
        $conf['sina']['app_key'] = ''; // 应用授权 app key
        $conf['sina']['app_secret'] = ''; // 应用授权 app secret
        $conf['sina']['api'] = 'https://api.weibo.com/2/'; // 接口url
        $conf['sina']['expire_time'] = 7; // accesstoken有效期,初级7天
        
        /**
         * Sync type
         */
        $conf['sync']['duplex'] = 1;
        $conf['sync']['t2s'] = 2;
        $conf['sync']['s2t'] = 3;
        $conf['sync']['close'] = 0;

        /**
         * Cookie
         */
        $conf['cookie']['key'] = 'suv_auth'; // the key of cookie
        $conf['cookie']['encrypt_key'] = ''; // cookie des加密的key
        $conf['cookie']['serial_secret'] = ''; // 验证auth信息完整性的字符串 

        /**
         * General
         */
        $conf['notification_text'] = 'hi~, 我是 @%s ，\'白纸年华\'的微博同步应用的授权明天就要到期了，快去重新登录吧～ %s';
        $conf['exc_times_limit'] = 0; // 同步异常的次数限制

        /**
         * Mysql pdo
         */
        $conf['pdo'] = '';

        $this->data = $conf;   
    }

    /**
     * single
     * single 单例调用的实现   
     *
     * @return object
     */
    public static function single() 
    { 
        static $instance;      
        return $instance ? $instance : ($instance = new self());
    } 
}

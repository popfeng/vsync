<?PHP
/**
 * Vs_Action_Cauth_Tencent
 * 取消授权
 *
 * @author popfeng <popfeng@yeah.net>
 */
class Vs_Action_Cauth_Tencent extends Vs_Action_Abstract
{
    protected $_needAuth = false;

    /**
     * run
     * 执行
     *
     * @return void
     */
    public function run()
    {
        $r = new Vs_Service_Tencent_Auth;
        $r->clearAuth();

        $this->outputJson('成功取消授权～');
    }
}

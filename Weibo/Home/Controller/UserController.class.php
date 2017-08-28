<?php
/**
 * Created by PhpStorm.
 * User: huangfeng
 * Date: 17/08/2017
 * Time: 9:17 PM
 */

namespace Home\Controller;

use Home\Model\UserModel;
use Org\Util\Date;
use Think\Controller;
use Think\Model;

//use Think\Model;


class UserController extends Controller {

    public function index(){

        echo 'usercONTOLLER';
    }

    public function user(){
        echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF8">';
//        $user = new Model('User','think_','mysql://root:123456@localhost/thinkphp');
//        $user = M('User');

//        $user = new UserModel();
//        $user = D('User');
        // 1>字符串查询
//        var_dump($user->where('id=1')->select());
        // 2> 使用索引数组作为查询条件
//         $condition['id'] = 1;
//        $condition['user'] = '小新';
//        $condition['_logic'] ='or';   //查询条件 是or
//        var_dump($user->where($condition)->select());
        // 3> 使用对像的方式查询
//        $condition = new \stdClass();  //php5 空类  //实例化后不能添加方法 一般用来传参数
//        $condition->id=1;
//        $condition->user ='小新';
//        $condition->_logic = 'OR';
//
//        var_dump($user->where($condition)->select());




        //表达式查询
        //$map 大于,小于....
//        $map['id'] = array('eq',1);
        /* eq 等于  neq  不等于
            gt 大于   egt  大于等于
            lt  小于  elt  小于等于

        */
//        $map['user'] = array('like','%小%');
//        $map['user'] = array('notlike','%小%');
//        $map['user'] = array('like',array('%王%','%飞%'),'AND');
        //自定义
//        $map['id'] = array('exp','=3');
//        $map['id'] = array('exp','in (1,2,3)');  //自定义区间查询
//        var_dump($user->where($map)->select());





//        $user = M();
//        var_dump($user->query("SELECT * FROM  think_user WHERE user='小新'"));
//         var_dump($user->getDbFields());


        //快捷查询


//        $user = M('User');


//        $map['user|email'] = '小新';
//        $map['id&user'] =  array(1,'小新','_multi'=>true);//不加_multi id 和user 都会匹配数组的值 ，加上后会一一对应
//        $map['id&user'] = array(array('gt',1),'小新','_multi'=>true);
//        $map['id'] = array(array('gt',1),array('lt',4),'OR ');  //区间查询 不要or 默认and
//        var_dump($user->where($map)->select());


        //组合查询
//        $map['_string'] = "user='小新' AND id=1";
//        $map['_logic']= 'OR';
//        $map["_query"] = 'user=小新&id=1&_logic=OR';


//        $map['id '] = array('eq',1);
//        $where['id'] = 2;
//        $map['_complex'] = $where;
//        $map['_logic']='OR';
//        var_dump($user->where($map)->select());

        //统计查询
//        var_dump($user->count('email'));
//        var_dump($user->max('id'));
        //avg 平均值      max 最大值  min最小值  sum求和

        //动态查询
//        var_dump($user->getByEMail('xiaoxi@163.com'));
//        var_dump($user->getFieldByUser('小新','id'));  //找到小新对应的id是多少
//        var_dump($user->query("select * from think_user"));
//        var_dump($user->execute("UPDATE think_user SET user='蜡笔小新' WHERE id=1"));
//        var_dump($user->select());

        //子查询
        //连贯操作
//         var_dump($user->where('id>1')->order('date DESC')->limit(2)->select());//只要前边几条
//        var_dump($user->select(array('where'=>array('id'=>array('neq',1)),'order'=>'date DESC','limit'=>2)));


        //CURD 数据库处理
//         var_dump($user->where('id in(1,2,3,4)')->find());
//        $user->where('id=2')->delete();
//        $map['id'] =1;
//        var_dump($user->where($map)->where('user ="蜡笔小新"')->select());
//        var_dump($user->select());

        //order  结果集排序
//        var_dump($user->order('id desc,email desc')->select());   //第一排序  第二排序  优先用第一排完如果相同 再按第二排

        //field 指定返回的字段
//        var_dump($user->field('id,user')->select());
//        var_dump($user->field('SUM(id) AS count')->select());//查询结果总和并改一个别名 count 输出
//         dump($user->field(array('id','LEFT(user,3) AS left_user'))->select());
//        dump($user->field(array('id','LEFT(user,3)' => 'left_user'))->select());
//        dump($user->field('id,user')->select());   //分字段查询  可能不写 或为 *
//        dump($user->limit(2,2)->select()); //limit 的第一个参数表示从第几条数据开始 第二个参数表示 展示多少条  如果只有一个参数默认显示从少条数据
//        dump($user->page(4,1)->select());  //page 0和1 都表示第一页
//
//        //table 当前数据库表的操作
////        dump($user->table('think_info')->select()); //查询别的表的数据
//        dump($user->table('__USER__')->select()); //查询数据库表  表名的简写方式
//
//        //多表查询
////        dump($user->field('a.id')->table('__USER__ a')->select());
//
//       //20170824  test 连贯操作
//        dump($user->select(array('where'=>array('id'=>array('neq',1)),'order'=>'date DESC','limit'=>2)));
//
//        dump($user->where('id=5')->select());
//        dump($user->where('id in (1,2,3,4)')->find());  //这个find 查询默认只显示一条数据 如果显示多条参数控制
//        $user->where('id=5')->delete();  //删除id =5 的数据
//        dump($user->where('id=1')->select());
//        $map['id'] =1;
//        dump($user->where($map)->select());
//        $map['id']=1;
//        dump($user->where($map)->where('use="蜡笔小新"')->select());  //用多个参数来&查询

//        dump($user->field('id,user')->select());
//        dump($user->field('SUM(id) AS count')->select());
//        dump($user->field(array('id','LEFT(user,3) AS left_user'))->select());
//        dump($user->field(array('id','LEFT(user,3)'=>'left_user'))->select());
//        dump($user->field()->select());
//        dump($user->table('think_info')->select());
//        dump($user->table('__USER__')->select()); //表名要大写
//        dump($user->field('a.id,a.user')->table('__USER__ a')->select());
//        dump($user->alias('a')->select());
//        dump($user->field('user,SUM(id)')->group('id')->having('id>2')->select());

//        dump($user->comment('sql添加注释')->select());
        //join 多表联查
//        dump($user->join('think_info ON think_info.uid = think_user.id')->select());
//        dump($user->union('SELECT * FROM __INFO__')->select());
        //distinct  返回不复复的列    方法用于返回唯一不同的值
//        dump($user->distinct(true)->field('user')->select());
//        dump($user->cache(true)->select());

        /*
//        $user = new UserModel();
////        dump($user->scope('sql2')->scope('sql1')->select());
////        dump($user->scope('sql2',array('limit'=>4))->select());//调整sql2的limit
//        dump($user->sql2()->select());
        */


        /*
         * CURD 操作
         * */

    }

    public function create(){
        echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF8">';
        $user = M('User');
//        $data['user'] = '樱桃小丸子';
//        $data['email'] = 'yintao@qq.com';     //用这种方法可以覆盖传过来的数据
//
//        dump($user->create($data));     //create 只是创建了数据对像
//        echo '123';


//        $data['user'] =$_POST['user'];
//        $data['email'] = $_POST['email'];   //用$data 变量来接收 提交过来的值
//        $data['date'] =  date('Y-m-d H:i:s');
//        dump($user->create($data));

        //默认是以post  方法接收的
//        $data = new \stdClass();
//        $data ->user = $_POST['user'];
//        $data ->email = $_POST['email'];
//        dump($user->create($data));

        //如果以get方法接收  需要修改参数
//        dump($user->create($_GET));  //第二个参数 设置要进行的操作  有两个参数 post/get 一定要写
//        dump($user->create($_POST,Model::MODEL_INSERT));

//        dump($user->field('user')->create());


//        //在模型里限制字段
////        $user = D('User');
//        dump($user->create());

        $data = $user->create();
        $data['date'] = date('Y-m-d H:i:s');
        $user ->add($data);


    }
}

























































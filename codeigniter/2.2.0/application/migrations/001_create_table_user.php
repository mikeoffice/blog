<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Create_table_user extends CI_Migration {

    public function up(){
        $this->dbforge->add_field("id");
        $this->dbforge->add_field("`username` varchar(32) not null comment '用户名'");
        $this->dbforge->add_field("`nickname` varchar(32) not null comment '昵称'");
        $this->dbforge->add_field("`password` varchar(32) not null comment '密码'");
        $this->dbforge->add_field("`group_id` tinyint(2) not null default 0 comment '组ID'");
        $this->dbforge->add_field("`status` tinyint(2) not null default 0 comment '状态'");
        $this->dbforge->add_field("`ctime` int(10) not null default 0 comment '创建时间'");
        $this->dbforge->create_table('user',TRUE);
        
        //创建 索引
        $this->db->query('alter table user add key `IDX_username_password` (`username`,`password`)');
        $this->db->query('alter table user add key `IDX_group_id` (`group_id`)');
        $this->db->query('alter table user add key `IDX_status` (`status`)');
    }

    public function down(){
        $this->dbforge->drop_table('user');
    }

}



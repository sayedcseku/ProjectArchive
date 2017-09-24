<!--Assign or remove members form a thesis-->
<?php
include_once './util/class.util.php';
include_once '/../dao/class.thesisMemberdao.php';

class ThesisMemberBao{
    private $_MemberDao;

    public function __construct()
    {
        $this->_MemberDao=new ThesisMemberDao();
    }

    //add Member
    public function addMember($StudentThesis){
        $Result=$this->_MemberDao->addMember($StudentThesis);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.addMember($StudentThesis)");
        }
        return $Result;
    }

    //add Supervisor
    public function addSupervisor($SupervisorThesis){
        $Result=$this->_MemberDao->addSupervisor($SupervisorThesis);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.addSupervisor($SupervisorThesis)");
        }
        return $Result;
    }

    //get members of the thesis
    public function getMember($Thesis){
        $Result=$this->_MemberDao->getMember($Thesis);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.getMember($Thesis)");
        }
        return $Result;
    }

    //get all students
    public function getStudent($Student){
        $Result=$this->_MemberDao->getStudent($Student);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.getStudent($Student)");
        }
        return $Result;
    }

    //get supervisors of the thesis
    public function getSupervisor($Thesis){
        $Result=$this->_MemberDao->getSupervisor($Thesis);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.getSupervisor($Thesis)");
        }
        return $Result;
    }

    //get all students
    public function getTeacher($Teacher){
        $Result=$this->_MemberDao->getTeacher($Teacher);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.getTeacher($Teacher)");
        }
        return $Result;
    }

    //remove members from a thesis
    public function removeMember($Student){
        $Result=$this->_MemberDao->removeMember($Student);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.removeMember($Student)");
        }
        return $Result;
    }

    //remove supervisors from a thesis
    public function removeSupervisor($Supervisor){
        $Result=$this->_MemberDao->removeSupervisor($Supervisor);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.removeSupervisor($Supervisor)");
        }
        return $Result;
    }
}
?>

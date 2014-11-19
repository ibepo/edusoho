<?php
namespace Topxia\Service\Course;

interface EduMaterialService
{
    public function addEduMaterial($eduMaterial);

    public function updateEduMaterial($id,array $fields);
    
    public function findAllEduMaterials();

    public function getEduMaterialByGradeIdAndSubjectId($gradeId,$subjectId);
}
package online.fredinfo.portfolio.controllers.api;

import online.fredinfo.portfolio.dto.SkillDetailDTO;
import online.fredinfo.portfolio.dto.SkillFormDTO;
import org.springframework.http.ResponseEntity;
import java.util.List;

public interface SkillApi {
    ResponseEntity<List<SkillDetailDTO>> getAllSkills();
    ResponseEntity<SkillDetailDTO> getSkillById(Long id);
    ResponseEntity<List<SkillDetailDTO>> getSkillsByName(String name);
    ResponseEntity<List<SkillDetailDTO>> getSkillsByProject(Long projectId);
    ResponseEntity<SkillDetailDTO> createSkill(SkillFormDTO skill);
    ResponseEntity<SkillDetailDTO> updateSkill(Long id, SkillFormDTO skill);
    ResponseEntity<Void> deleteSkill(Long id);
} 
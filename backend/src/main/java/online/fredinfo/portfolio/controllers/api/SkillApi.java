package online.fredinfo.portfolio.controllers.api;

import online.fredinfo.portfolio.models.Skill;
import org.springframework.http.ResponseEntity;
import java.util.List;

public interface SkillApi {
    ResponseEntity<List<Skill>> getAllSkills();
    ResponseEntity<Skill> getSkillById(Long id);
    ResponseEntity<List<Skill>> getSkillsByName(String name);
    ResponseEntity<List<Skill>> getSkillsByProject(Long projectId);
    ResponseEntity<Skill> createSkill(Skill skill);
    ResponseEntity<Skill> updateSkill(Long id, Skill skill);
    ResponseEntity<Void> deleteSkill(Long id);
} 
package online.fredinfo.portfolio.services;

import online.fredinfo.portfolio.models.Skill;
import java.util.List;
import java.util.Optional;

public interface SkillService {
    List<Skill> getAllSkills();
    Optional<Skill> getSkillById(Long id);
    List<Skill> getSkillsByName(String name);
    List<Skill> getSkillsByProject(Long projectId);
    Skill createSkill(Skill skill);
    Skill updateSkill(Long id, Skill skill);
    void deleteSkill(Long id);
} 
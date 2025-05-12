package online.fredinfo.portfolio.services.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import online.fredinfo.portfolio.models.Skill;
import online.fredinfo.portfolio.repositories.SkillRepository;
import online.fredinfo.portfolio.services.SkillService;

import java.util.List;
import java.util.Optional;

@Service
public class SkillServiceImpl implements SkillService {

    @Autowired
    private SkillRepository skillRepository;

    @Override
    public List<Skill> getAllSkills() {
        return skillRepository.findAll();
    }

    @Override
    public Optional<Skill> getSkillById(Long id) {
        return skillRepository.findById(id);
    }

    @Override
    public List<Skill> getSkillsByName(String name) {
        return skillRepository.findByNameContainingIgnoreCase(name);
    }

    @Override
    public List<Skill> getSkillsByProject(Long projectId) {
        return skillRepository.findByProjectsId(projectId);
    }

    @Override
    public Skill createSkill(Skill skill) {
        return skillRepository.save(skill);
    }

    @Override
    public Skill updateSkill(Long id, Skill skill) {
        if (skillRepository.existsById(id)) {
            skill.setId(id);
            return skillRepository.save(skill);
        }
        return null;
    }

    @Override
    public void deleteSkill(Long id) {
        skillRepository.deleteById(id);
    }
} 
package online.fredinfo.portfolio.domain.usecases.SkillCRUD;

import online.fredinfo.portfolio.domain.entities.Skill;
import online.fredinfo.portfolio.domain.entities.SkillRepository;

import java.util.List;
import java.util.UUID;

public class FindSkillUseCase {
    private final SkillRepository skillRepository;

    public FindSkillUseCase(SkillRepository skillRepository) {
        this.skillRepository = skillRepository;
    }

    public SkillRepository getSkillRepository() {
        return skillRepository;
    }

    public Skill execute(UUID id) {
        return this.skillRepository.findById(id);
    }

    public List<Skill> execute() {
        return this.skillRepository.findAll();
    }

    public List<Skill> execute(String name) {
        return this.skillRepository.findByName(name);
    }
}

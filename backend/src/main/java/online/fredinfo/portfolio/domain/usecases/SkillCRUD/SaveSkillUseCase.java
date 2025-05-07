package online.fredinfo.portfolio.domain.usecases.SkillCRUD;

import online.fredinfo.portfolio.domain.entities.Skill;
import online.fredinfo.portfolio.domain.entities.SkillRepository;

public class SaveSkillUseCase {
    private final SkillRepository skillRepository;

    public SaveSkillUseCase(SkillRepository skillRepository) {
        this.skillRepository = skillRepository;
    }

    public SkillRepository getSkillRepository() {
        return skillRepository;
    }

    public Skill execute(Skill skill) {
        return skillRepository.save(skill);
    }
}

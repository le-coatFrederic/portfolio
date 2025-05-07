package online.fredinfo.portfolio.domain.usecases.SkillCRUD;

import online.fredinfo.portfolio.domain.entities.Skill;
import online.fredinfo.portfolio.domain.entities.SkillRepository;

import java.util.UUID;

public class DeleteSkillUseCase {
    private final SkillRepository skillRepository;

    public DeleteSkillUseCase(SkillRepository skillRepository) {
        this.skillRepository = skillRepository;
    }

    public SkillRepository getSkillRepository() {
        return skillRepository;
    }

    public void execute(UUID id) {
        skillRepository.deleteById(id);
    }

    public void execute(Skill skill) {
        skillRepository.delete(skill);
    }
}

package fred.portfolio.data.mappers;

import fred.portfolio.data.dtos.SkillSaveDTO;
import fred.portfolio.data.dtos.SkillShowDTO;
import fred.portfolio.data.entities.Skill;
import org.springframework.stereotype.Component;

@Component
public class SkillMapper {
    public SkillShowDTO skillToSkillDto(Skill skill) {

        return new SkillShowDTO(
                skill.getId(),
                skill.getName()
        );
    }

    public Skill skillDtoToSkill(SkillSaveDTO skillSaveDTO) {

        return new Skill(
                skillSaveDTO.name()
        );
    }
}

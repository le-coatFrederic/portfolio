package online.fredinfo.portfolio.mappers;

import org.springframework.stereotype.Component;
import online.fredinfo.portfolio.models.Skill;
import online.fredinfo.portfolio.dto.SkillFormDTO;
import online.fredinfo.portfolio.dto.SkillDetailDTO;

@Component
public class SkillMapper {
    public Skill toEntity(SkillFormDTO dto) {
        Skill skill = new Skill();
        skill.setName(dto.name());
        skill.setDescription(dto.description());
        skill.setIcon(dto.icon());
        return skill;
    }

    public SkillDetailDTO toDTO(Skill entity) {
        return new SkillDetailDTO(
            entity.getId(),
            entity.getName(),
            entity.getDescription(),
            entity.getIcon()
        );
    }

    public void updateEntityFromDTO(SkillFormDTO dto, Skill entity) {
        if (dto.name() != null) entity.setName(dto.name());
        if (dto.description() != null) entity.setDescription(dto.description());
        if (dto.icon() != null) entity.setIcon(dto.icon());
    }
} 
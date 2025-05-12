package online.fredinfo.portfolio.mappers;

import org.springframework.stereotype.Component;
import online.fredinfo.portfolio.models.Tech;
import online.fredinfo.portfolio.dto.TechFormDTO;
import online.fredinfo.portfolio.dto.TechDetailDTO;

@Component
public class TechMapper {
    public Tech toEntity(TechFormDTO dto) {
        Tech tech = new Tech();
        tech.setName(dto.name());
        tech.setUrl(dto.url());
        tech.setIcon(dto.icon());
        return tech;
    }

    public TechDetailDTO toDTO(Tech entity) {
        return new TechDetailDTO(
            entity.getId(),
            entity.getName(),
            entity.getUrl(),
            entity.getIcon()
        );
    }

    public void updateEntityFromDTO(TechFormDTO dto, Tech entity) {
        if (dto.name() != null) entity.setName(dto.name());
        if (dto.url() != null) entity.setUrl(dto.url());
        if (dto.icon() != null) entity.setIcon(dto.icon());
    }
} 
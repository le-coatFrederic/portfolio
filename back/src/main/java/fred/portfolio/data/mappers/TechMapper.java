package fred.portfolio.data.mappers;

import fred.portfolio.data.dtos.TechSaveDTO;
import fred.portfolio.data.dtos.TechShowDTO;
import fred.portfolio.data.entities.Tech;
import org.springframework.stereotype.Component;

@Component
public class TechMapper {
    public TechShowDTO techToTechDto(Tech tech) {
        return new TechShowDTO(
                tech.getId(),
                tech.getName(),
                tech.getIcon(),
                tech.getLink()
        );
    }

    public Tech techDtoToTech(TechSaveDTO techDto) {
        return new Tech(
                techDto.name(),
                techDto.icon(),
                techDto.link()
        );
    }
}

package fred.portfolio.data.mappers;

import fred.portfolio.data.dtos.EventSaveDTO;
import fred.portfolio.data.dtos.EventShowDTO;
import fred.portfolio.data.dtos.SkillShowDTO;
import fred.portfolio.data.entities.Event;
import fred.portfolio.data.entities.Skill;
import fred.portfolio.data.repositories.SkillRepository;
import org.springframework.stereotype.Component;

import java.util.ArrayList;
import java.util.List;

@Component
public class EventMapper {
    private final SkillMapper skillMapper;
    private final SkillRepository skillRepository;

    public EventMapper(SkillMapper skillMapper, SkillRepository skillRepository) {
        this.skillMapper = skillMapper;
        this.skillRepository = skillRepository;
    }

    public EventShowDTO eventToEventDTO(Event event) {
        List<SkillShowDTO> skills = new ArrayList<>();
        event.getSkills().forEach(skill -> skills.add(this.skillMapper.skillToSkillDto(skill)));

        return new EventShowDTO(
                event.getId(),
                event.getTitle(),
                event.getDescription(),
                skills
        );
    }

    public Event eventDtoToEvent(EventSaveDTO eventDto) {
        List<Skill> skills = new ArrayList<>();
        eventDto.skillsId().forEach(id -> skills.add(this.skillRepository.findById(id).get()));
        return new Event(
                eventDto.title(),
                eventDto.description(),
                eventDto.link(),
                skills
        );
    }
}

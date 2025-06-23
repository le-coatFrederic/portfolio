package fred.portfolio.services;

import fred.portfolio.data.dtos.EventSaveDTO;
import fred.portfolio.data.dtos.EventShowDTO;
import fred.portfolio.data.entities.Event;
import fred.portfolio.data.mappers.EventMapper;
import fred.portfolio.data.repositories.EventRepository;
import fred.portfolio.web.errors.NotFoundException;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@Service
@Transactional
public class EventService {
    private final EventMapper eventMapper;
    private final EventRepository eventRepository;

    public EventService(EventMapper eventMapper, EventRepository eventRepository) {
        this.eventMapper = eventMapper;
        this.eventRepository = eventRepository;
    }

    public List<EventShowDTO> getAll() {
        List<EventShowDTO> eventDTOs = new ArrayList<>();
        this.eventRepository.findAll().forEach(event -> eventDTOs.add(this.eventMapper.eventToEventDTO(event)));
        return eventDTOs;
    }

    public List<EventShowDTO> getAllByTitle(String title) {
        List<EventShowDTO> eventDTOs = new ArrayList<>();
        this.eventRepository.findAllByTitleLike(title).forEach(event -> eventDTOs.add(this.eventMapper.eventToEventDTO(event)));
        return eventDTOs;
    }

    public EventShowDTO getById(Long id) {
        Optional<Event> event = this.eventRepository.findById(id);
        if (event.isEmpty()) {
            throw new NotFoundException("Event with id " + id + " not found");
        }
        return this.eventMapper.eventToEventDTO(event.get());
    }

    public EventShowDTO create(EventSaveDTO eventSaveDTO) {
        Event event = this.eventMapper.eventDtoToEvent(eventSaveDTO);
        event = this.eventRepository.save(event);
        return this.eventMapper.eventToEventDTO(event);
    }

    public EventShowDTO update(Long id, EventSaveDTO eventSaveDTO) {
        Optional<Event> event = this.eventRepository.findById(id);
        if (event.isEmpty()) {
            throw new NotFoundException("Event with id " + id + " not found");
        }
        Event eventToSave = this.eventMapper.eventDtoToEvent(eventSaveDTO);
        eventToSave.setId(id);
        eventToSave = this.eventRepository.save(eventToSave);
        return this.eventMapper.eventToEventDTO(eventToSave);
    }

    public void delete(Long id) {
        this.eventRepository.deleteById(id);
    }
}
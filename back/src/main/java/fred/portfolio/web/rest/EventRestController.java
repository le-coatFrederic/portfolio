package fred.portfolio.web.rest;

import fred.portfolio.data.dtos.EventSaveDTO;
import fred.portfolio.data.dtos.EventShowDTO;
import fred.portfolio.services.EventService;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/events")
public class EventRestController {
    private final EventService eventService;

    public EventRestController(EventService eventService) {
        this.eventService = eventService;
    }

    @GetMapping
    public ResponseEntity<List<EventShowDTO>> getAll(@RequestParam(name = "title", required = false) String title) {

        return new ResponseEntity<>(this.eventService.getAllByTitle(null), HttpStatus.OK);
    }

    @GetMapping("/{id}")
    public ResponseEntity<EventShowDTO> getById(@PathVariable("id") Long id) {
        return new ResponseEntity<>(this.eventService.getById(id), HttpStatus.OK);
    }

    @PostMapping
    public ResponseEntity<EventShowDTO> create(@RequestBody EventSaveDTO eventDto) {
        return new ResponseEntity<>(this.eventService.create(eventDto), HttpStatus.CREATED);
    }

    @PutMapping("/{id}")
    public ResponseEntity<EventShowDTO> update(@PathVariable("id") Long id, @RequestBody EventSaveDTO eventDto) {
        return new ResponseEntity<>(this.eventService.update(id, eventDto), HttpStatus.OK);
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> delete(@PathVariable("id") Long id) {
        this.eventService.delete(id);
        return new ResponseEntity<>(HttpStatus.NO_CONTENT);
    }
}

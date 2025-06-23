package fred.portfolio.web.rest;

import fred.portfolio.data.dtos.SkillSaveDTO;
import fred.portfolio.data.dtos.SkillShowDTO;
import fred.portfolio.services.SkillService;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/skills")
public class SkillRestController {
    private final SkillService skillService;

    public SkillRestController(SkillService skillService) {
        this.skillService = skillService;
    }

    @GetMapping
    public ResponseEntity<List<SkillShowDTO>> getAll(@RequestParam(name = "name", required = false) String name) {
        if (name != null) {
            return new ResponseEntity<>(this.skillService.getAllByName(name), HttpStatus.OK);
        }

        return new ResponseEntity<>(this.skillService.getAll(), HttpStatus.OK);
    }

    @GetMapping("/{id}")
    public ResponseEntity<SkillShowDTO> getById(@PathVariable("id") Long id) {
        return new ResponseEntity<>(this.skillService.getById(id), HttpStatus.OK);
    }

    @PostMapping
    public ResponseEntity<SkillShowDTO> create(@RequestBody SkillSaveDTO skill) {
        return new ResponseEntity<>(this.skillService.create(skill), HttpStatus.CREATED);
    }

    @PutMapping("/{id}")
    public ResponseEntity<SkillShowDTO> update(@PathVariable("id") Long id, @RequestBody SkillSaveDTO skill) {
        return new ResponseEntity<>(this.skillService.update(id, skill), HttpStatus.OK);
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> delete(@PathVariable("id") Long id) {
        this.skillService.delete(id);
        return new ResponseEntity<>(HttpStatus.NO_CONTENT);
    }
}

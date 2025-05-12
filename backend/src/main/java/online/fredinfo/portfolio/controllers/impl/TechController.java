package online.fredinfo.portfolio.controllers.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import online.fredinfo.portfolio.controllers.api.TechApi;
import online.fredinfo.portfolio.models.Tech;
import online.fredinfo.portfolio.services.TechService;

import java.util.List;

@RestController
@RequestMapping("/api/techs")
public class TechController implements TechApi {

    @Autowired
    private TechService techService;

    @Override
    @GetMapping
    public ResponseEntity<List<Tech>> getAllTechs() {
        return ResponseEntity.ok(techService.getAllTechs());
    }

    @Override
    @GetMapping("/{id}")
    public ResponseEntity<Tech> getTechById(@PathVariable Long id) {
        return techService.getTechById(id)
                .map(ResponseEntity::ok)
                .orElse(ResponseEntity.notFound().build());
    }

    @Override
    @GetMapping("/search/name")
    public ResponseEntity<List<Tech>> getTechsByName(@RequestParam String name) {
        return ResponseEntity.ok(techService.getTechsByName(name));
    }

    @Override
    @GetMapping("/search/project/{projectId}")
    public ResponseEntity<List<Tech>> getTechsByProject(@PathVariable Long projectId) {
        return ResponseEntity.ok(techService.getTechsByProject(projectId));
    }

    @Override
    @PostMapping
    public ResponseEntity<Tech> createTech(@RequestBody Tech tech) {
        return ResponseEntity.ok(techService.createTech(tech));
    }

    @Override
    @PutMapping("/{id}")
    public ResponseEntity<Tech> updateTech(@PathVariable Long id, @RequestBody Tech tech) {
        Tech updatedTech = techService.updateTech(id, tech);
        if (updatedTech != null) {
            return ResponseEntity.ok(updatedTech);
        }
        return ResponseEntity.notFound().build();
    }

    @Override
    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteTech(@PathVariable Long id) {
        techService.deleteTech(id);
        return ResponseEntity.ok().build();
    }
} 
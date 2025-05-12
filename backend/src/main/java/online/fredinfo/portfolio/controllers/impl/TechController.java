package online.fredinfo.portfolio.controllers.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import online.fredinfo.portfolio.controllers.api.TechApi;
import online.fredinfo.portfolio.dto.TechDetailDTO;
import online.fredinfo.portfolio.dto.TechFormDTO;
import online.fredinfo.portfolio.mappers.TechMapper;
import online.fredinfo.portfolio.models.Tech;
import online.fredinfo.portfolio.services.TechService;

import java.util.List;

@RestController
@RequestMapping("/api/techs")
public class TechController implements TechApi {

    @Autowired
    private TechService techService;
    @Autowired
    private TechMapper techMapper;

    @Override
    @GetMapping
    public ResponseEntity<List<TechDetailDTO>> getAllTechs() {
        return ResponseEntity.ok(techService.getAllTechs().stream()
                .map(techMapper::toDTO)
                .toList());
    }

    @Override
    @GetMapping("/{id}")
    public ResponseEntity<TechDetailDTO> getTechById(@PathVariable Long id) {
        return techService.getTechById(id)
                .map(tech -> ResponseEntity.ok(techMapper.toDTO(tech)))
                .orElse(ResponseEntity.notFound().build());
    }

    @Override
    @GetMapping("/search/name")
    public ResponseEntity<List<TechDetailDTO>> getTechsByName(@RequestParam String name) {
        return ResponseEntity.ok(techService.getTechsByName(name).stream()
                .map(techMapper::toDTO)
                .toList());
    }

    @Override
    @GetMapping("/search/project/{projectId}")
    public ResponseEntity<List<TechDetailDTO>> getTechsByProject(@PathVariable Long projectId) {
        return ResponseEntity.ok(techService.getTechsByProject(projectId).stream()
                .map(techMapper::toDTO)
                .toList());
    }

    @Override
    @PostMapping
    public ResponseEntity<TechDetailDTO> createTech(@RequestBody TechFormDTO tech) {
        Tech techEntity = techMapper.toEntity(tech);
        techEntity = techService.createTech(techEntity);
        return ResponseEntity.ok(techMapper.toDTO(techEntity));
    }

    @Override
    @PutMapping("/{id}")
    public ResponseEntity<TechDetailDTO> updateTech(@PathVariable Long id, @RequestBody TechFormDTO tech) {
        Tech techEntity = techMapper.toEntity(tech);
        Tech updatedTech = techService.updateTech(id, techEntity);
        if (updatedTech != null) {
            return ResponseEntity.ok(techMapper.toDTO(updatedTech));
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
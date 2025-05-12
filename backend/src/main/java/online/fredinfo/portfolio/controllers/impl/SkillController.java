package online.fredinfo.portfolio.controllers.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import online.fredinfo.portfolio.controllers.api.SkillApi;
import online.fredinfo.portfolio.dto.SkillDetailDTO;
import online.fredinfo.portfolio.dto.SkillFormDTO;
import online.fredinfo.portfolio.mappers.SkillMapper;
import online.fredinfo.portfolio.models.Skill;
import online.fredinfo.portfolio.services.SkillService;

import java.util.List;

@RestController
@RequestMapping("/api/skills")
public class SkillController implements SkillApi {

    @Autowired
    private SkillService skillService;
    
    @Autowired
    private SkillMapper skillMapper;

    @Override
    @GetMapping
    public ResponseEntity<List<SkillDetailDTO>> getAllSkills() {
        return ResponseEntity.ok(skillService.getAllSkills().stream()
                .map(skillMapper::toDTO)
                .toList());
    }

    @Override
    @GetMapping("/{id}")
    public ResponseEntity<SkillDetailDTO> getSkillById(@PathVariable Long id) {
        return skillService.getSkillById(id)
                .map(skill -> ResponseEntity.ok(skillMapper.toDTO(skill)))
                .orElse(ResponseEntity.notFound().build());
    }

    @Override
    @GetMapping("/search/name")
    public ResponseEntity<List<SkillDetailDTO>> getSkillsByName(@RequestParam String name) {
        return ResponseEntity.ok(skillService.getSkillsByName(name).stream()
                .map(skillMapper::toDTO)
                .toList());
    }

    @Override
    @GetMapping("/search/project/{projectId}")
    public ResponseEntity<List<SkillDetailDTO>> getSkillsByProject(@PathVariable Long projectId) {
        return ResponseEntity.ok(skillService.getSkillsByProject(projectId).stream()
                .map(skillMapper::toDTO)
                .toList());
    }

    @Override
    @PostMapping
    public ResponseEntity<SkillDetailDTO> createSkill(@RequestBody SkillFormDTO skill) {
        Skill skillEntity = skillMapper.toEntity(skill);
        skillEntity = skillService.createSkill(skillEntity);
        SkillDetailDTO skillDTO = skillMapper.toDTO(skillEntity);
        return new ResponseEntity<>(skillDTO, HttpStatus.CREATED);
    }

    @Override
    @PutMapping("/{id}")
    public ResponseEntity<SkillDetailDTO> updateSkill(@PathVariable Long id, @RequestBody SkillFormDTO skill) {
        Skill skillEntity = skillMapper.toEntity(skill);
        Skill updatedSkill = skillService.updateSkill(id, skillEntity);
        if (updatedSkill != null) {
            return ResponseEntity.ok(skillMapper.toDTO(updatedSkill));
        }
        return ResponseEntity.notFound().build();
    }

    @Override
    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteSkill(@PathVariable Long id) {
        skillService.deleteSkill(id);
        return ResponseEntity.ok().build();
    }
} 
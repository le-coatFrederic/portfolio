package online.fredinfo.portfolio.controllers.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import online.fredinfo.portfolio.controllers.api.SkillApi;
import online.fredinfo.portfolio.models.Skill;
import online.fredinfo.portfolio.services.SkillService;

import java.util.List;

@RestController
@RequestMapping("/api/skills")
public class SkillController implements SkillApi {

    @Autowired
    private SkillService skillService;

    @Override
    @GetMapping
    public ResponseEntity<List<Skill>> getAllSkills() {
        return ResponseEntity.ok(skillService.getAllSkills());
    }

    @Override
    @GetMapping("/{id}")
    public ResponseEntity<Skill> getSkillById(@PathVariable Long id) {
        return skillService.getSkillById(id)
                .map(ResponseEntity::ok)
                .orElse(ResponseEntity.notFound().build());
    }

    @Override
    @GetMapping("/search/name")
    public ResponseEntity<List<Skill>> getSkillsByName(@RequestParam String name) {
        return ResponseEntity.ok(skillService.getSkillsByName(name));
    }

    @Override
    @GetMapping("/search/project/{projectId}")
    public ResponseEntity<List<Skill>> getSkillsByProject(@PathVariable Long projectId) {
        return ResponseEntity.ok(skillService.getSkillsByProject(projectId));
    }

    @Override
    @PostMapping
    public ResponseEntity<Skill> createSkill(@RequestBody Skill skill) {
        return ResponseEntity.ok(skillService.createSkill(skill));
    }

    @Override
    @PutMapping("/{id}")
    public ResponseEntity<Skill> updateSkill(@PathVariable Long id, @RequestBody Skill skill) {
        Skill updatedSkill = skillService.updateSkill(id, skill);
        if (updatedSkill != null) {
            return ResponseEntity.ok(updatedSkill);
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
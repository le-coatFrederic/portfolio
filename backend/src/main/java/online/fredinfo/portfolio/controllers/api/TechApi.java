package online.fredinfo.portfolio.controllers.api;

import online.fredinfo.portfolio.models.Tech;
import org.springframework.http.ResponseEntity;
import java.util.List;

public interface TechApi {
    ResponseEntity<List<Tech>> getAllTechs();
    ResponseEntity<Tech> getTechById(Long id);
    ResponseEntity<List<Tech>> getTechsByName(String name);
    ResponseEntity<List<Tech>> getTechsByProject(Long projectId);
    ResponseEntity<Tech> createTech(Tech tech);
    ResponseEntity<Tech> updateTech(Long id, Tech tech);
    ResponseEntity<Void> deleteTech(Long id);
} 